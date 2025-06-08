<aside class="sidebar">

  <!-- Search Box -->
  <div hidden class="widget search-box">
    <h3>Search</h3>
    <input type="text" placeholder="Search..." />
  </div>

  <!-- Dynamic PHP Categories -->
  <?php
  $categories = [
    ['name' => 'Stories', 'link' => '/category/stories.php'],
    ['name' => 'Travels', 'link' => '/category/travels.php'],
    ['name' => 'Mindset', 'link' => '/category/mindset.php'],
    ['name' => 'Tech', 'link' => '/category/tech.php'],
    ['name' => 'Digital', 'link' => '/category/digital.php'],
    ['name' => 'Wordcraft', 'link' => '/category/wordcraft.php'],
  ];
  ?>

  <div class="widget categories">
    <h3>All Categories</h3>
    <div class="category-buttons">
      <?php
      $buttonClasses = ['btn-primary', 'btn-secondary', 'btn-success', 'btn-danger', 'btn-warning', 'btn-info'];
      foreach ($categories as $index => $category):
        $buttonClass = $buttonClasses[$index % count($buttonClasses)];
      ?>
        <a href="<?= htmlspecialchars($category['link']) ?>" class="btn <?= $buttonClass ?> m-1"><?= htmlspecialchars($category['name']) ?></a>
      <?php endforeach; ?>
    </div>
  </div>

  <?php
  $blogDir = $_SERVER['DOCUMENT_ROOT'] . '/blog/2025/May/';
  $allPosts = [];

  $iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($blogDir, FilesystemIterator::SKIP_DOTS)
  );

  foreach ($iterator as $fileInfo) {
    if (!$fileInfo->isFile()) continue;
    if (pathinfo($fileInfo->getFilename(), PATHINFO_EXTENSION) !== 'php') continue;

    $filePath = $fileInfo->getPathname();
    $relativePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $filePath);
    $fileContent = file_get_contents($filePath);

    // Extract the post title from $pageTitle
    if (preg_match('/\$pageTitle\s*=\s*[\'"]([^\'"]+)[\'"]\s*;/', $fileContent, $titleMatch)) {
      $title = $titleMatch[1];
    } else {
      $title = ucwords(str_replace(['-', '_', '.php'], [' ', ' ', ''], $fileInfo->getFilename()));
    }

    // Extract publish date from $publishDate
    if (preg_match('/\$publishDate\s*=\s*[\'"]([^\'"]+)[\'"]\s*;/', $fileContent, $dateMatch)) {
      $date = $dateMatch[1];
    } else {
      $date = date('Y-m-d', $fileInfo->getMTime()); // fallback
    }

    $allPosts[] = [
      'title' => $title,
      'link' => $relativePath,
      'date' => $date,
    ];
  }


  // Sort posts by date descending (newest first)
  usort($allPosts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
  });
  ?>

  <div class="widget newest-posts">
    <h3>Latest Posts</h3>

    <?php if (!empty($allPosts)): ?>
      <ul>
        <?php foreach (array_slice($allPosts, 0, 20) as $post): // Show latest 20 posts 
        ?>
          <li>
            <a href="<?= htmlspecialchars($post['link']) ?>">
              <?= htmlspecialchars($post['title']) ?>
            </a>
            <small>(<?= date('F j, Y', strtotime($post['date'])) ?>)</small> <!-- Display formatted date -->
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>No recent posts available.</p>
    <?php endif; ?>
  </div>

</aside>