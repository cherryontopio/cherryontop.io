<?php

include __DIR__ . '/../blog/post-data.php'; // adjust path as needed

$allPosts = getAllPosts();

// Filter posts by category 'digital'
$digitalPosts = array_filter($allPosts, function ($post) {
  return isset($post['category']) && strtolower($post['category']) === 'digital';
});

// Sort digital posts by date descending (newest first)
usort($digitalPosts, function ($a, $b) {
  return strtotime($b['date']) - strtotime($a['date']);
});

// Helper function to extract $pageTitle from the PHP blog post file
function getPostTitleFromFile($postLink)
{
  $fullPath = $_SERVER['DOCUMENT_ROOT'] . $postLink;
  if (!file_exists($fullPath)) {
    return null;
  }
  $content = file_get_contents($fullPath);

  // Extract $pageTitle = "..."
  if (preg_match('/\$pageTitle\s*=\s*[\'"](.+?)[\'"]\s*;/', $content, $match)) {
    return $match[1];
  }

  // fallback if no $pageTitle found
  return null;
}
?>

<section class="category-post-content">
  <div class="front-page-content">
    <div class="front-sections-headings">
      <h1>All Posts in Digital</h1>
    </div>
    <div class="post-card-container">
      <?php foreach ($digitalPosts as $post): ?>
        <?php
        // Override title by extracting from the post file directly
        $realTitle = getPostTitleFromFile($post['link']) ?: $post['title'];
        ?>
        <div class="post-card-item">
          <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['alt']) ?>">
          <div class="post-card-info">
            <h3 class="post-card-heading">
              <a href="<?= htmlspecialchars($post['link']) ?>">
                <?= htmlspecialchars($realTitle) ?>
              </a>
            </h3>
            <p class="post-card-excerpt"><!-- You can add excerpt extraction if needed --></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>