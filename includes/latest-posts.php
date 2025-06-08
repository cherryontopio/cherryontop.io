<?php
$cacheFile = __DIR__ . '/cache/latest-posts.json';
$cacheDuration = 600; // 10 minutes in seconds

function buildPostsArray()
{
    $baseDir = $_SERVER['DOCUMENT_ROOT'] . '/blog/2025/';
    $posts = [];

    foreach (new DirectoryIterator($baseDir) as $monthDir) {
        if (!$monthDir->isDir() || $monthDir->isDot()) continue;
        if (strtolower($monthDir->getFilename()) !== 'june') continue;

        $monthPath = $monthDir->getPathname();

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($monthPath, FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $fileInfo) {
            if (!$fileInfo->isFile()) continue;
            if (pathinfo($fileInfo->getFilename(), PATHINFO_EXTENSION) !== 'php') continue;

            $filePath = $fileInfo->getPathname();
            $relativePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $filePath);

            $content = file_get_contents($filePath);

            // Extract $pageTitle from the PHP file
            if (preg_match('/\$pageTitle\s*=\s*[\'"]([^\'"]+)[\'"]\s*;/', $content, $titleMatch)) {
                $title = $titleMatch[1];
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

            if (preg_match('/\$publishDate\s*=\s*[\'"]([^\'"]+)[\'"]\s*;/', $content, $dateMatch)) {
                $date = date('d-m-Y H:i:s', strtotime($dateMatch[1]));
            } else {
                $date = date('d-m-Y H:i:s', $fileInfo->getMTime());
            }


            // Extract category from relative path - assuming structure: /blog/2025/Month/category/post.php
            $pathParts = explode('/', trim($relativePath, '/'));
            $category = isset($pathParts[4]) ? $pathParts[4] : 'uncategorized';

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

    // Sort posts by newest date first
    usort($posts, function ($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });

    return $posts;
}

// Check if cache exists and is fresh
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheDuration) {
    $posts = json_decode(file_get_contents($cacheFile), true);
} else {
    $posts = buildPostsArray();
    // Make sure cache folder exists
    if (!is_dir(dirname($cacheFile))) {
        mkdir(dirname($cacheFile), 0755, true);
    }
    file_put_contents($cacheFile, json_encode($posts));
}

// Get latest 9 posts to show
$latestPosts = array_slice($posts, 0, 9);
?>

<div class="post-container">
    <?php foreach ($latestPosts as $post): ?>
        <div class="post-item">
            <a href="<?= htmlspecialchars($post['link']) ?>" target="_blank">
                <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['alt']) ?>">
            </a>
            <div class="post-info">
                <h3 class="post-heading">
                    <a href="<?= htmlspecialchars($post['link']) ?>" style="text-decoration: none; color: inherit;">
                        <?= htmlspecialchars($post['title']) ?>
                    </a>
                </h3>
            </div>
        </div>
    <?php endforeach; ?>
</div>