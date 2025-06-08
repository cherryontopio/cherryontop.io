<?php
function getAllPosts()
{
    static $posts = null;

    if ($posts !== null) {
        return $posts;
    }

    $yearDir = $_SERVER['DOCUMENT_ROOT'] . '/blog/2025/';
    $posts = [];

    // Loop through all month folders in 2025
    foreach (glob($yearDir . '*', GLOB_ONLYDIR) as $monthDir) {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($monthDir, FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $fileInfo) {
            if (!$fileInfo->isFile()) continue;
            if (pathinfo($fileInfo->getFilename(), PATHINFO_EXTENSION) !== 'php') continue;

            $filePath = $fileInfo->getPathname();
            $relativePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $filePath);
            $content = file_get_contents($filePath);

            // Extract <h2> title
            if (preg_match('/<h2[^>]*>(.*?)<\/h2>/', $content, $titleMatch)) {
                $title = strip_tags($titleMatch[1]);
            } else {
                $title = ucwords(str_replace(['-', '_', '.php'], [' ', ' ', ''], $fileInfo->getFilename()));
            }

            // Extract first <img> tag's src and alt
            if (preg_match('/<img[^>]+src=["\']([^"\']+)["\'][^>]*alt=["\']([^"\']*)["\']/i', $content, $imgMatch)) {
                $image = $imgMatch[1];
                $alt = $imgMatch[2];
            } else {
                $image = '/assets/images/default-thumbnail.webp';
                $alt = 'Post image';
            }

            // *** NEW: Extract publishDate variable from PHP code in the post ***
            if (preg_match('/\$publishDate\s*=\s*[\'"]([^\'"]+)[\'"]\s*;/', $content, $dateMatch)) {
                $date = $dateMatch[1];  // Use the manually set publishDate
            } else {
                // fallback to file modified date if publishDate not found
                $date = date('Y-m-d', $fileInfo->getMTime());
            }

            // Extract category from visible <a> inside <span class="post-categories">
            $category = null;
            if (preg_match('/<span class="post-categories">(.*?)<\/span>/is', $content, $categoriesMatch)) {
                $categoriesHtml = $categoriesMatch[1];

                if (preg_match_all('/<a(?![^>]*hidden)[^>]*class=["\']post-category["\'][^>]*>(.*?)<\/a>/is', $categoriesHtml, $catMatches)) {
                    $category = strtolower(trim(strip_tags($catMatches[1][0])));
                }
            }

            $posts[] = [
                'title' => $title,
                'link' => $relativePath,
                'image' => $image,
                'alt' => $alt,
                'date' => $date,
                'category' => $category,
            ];
        }
    }

    // Sort by newest first using the actual publishDate
    usort($posts, function ($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });

    return $posts;
}
