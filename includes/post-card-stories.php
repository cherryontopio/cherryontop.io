<?php
include __DIR__ . '/../blog/post-data.php'; // adjust path as needed

$allPosts = getAllPosts();

// Filter posts by category 'stories'
$storiesPosts = array_filter($allPosts, function ($post) {
    return isset($post['category']) && strtolower($post['category']) === 'stories';
});

// Sort stories posts by date descending (newest first)
usort($storiesPosts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});
?>

<section class="category-post-content">
  <div class="front-page-content">
    <div class="front-sections-headings">
      <h1>All Posts in Stories</h1>
    </div>
    <div class="post-card-container">
      <?php foreach ($storiesPosts as $post): ?>
        <div class="post-card-item">
          <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['alt']) ?>">
          <div class="post-card-info">
            <h3 class="post-card-heading">
              <a href="<?= htmlspecialchars($post['link']) ?>">
                <?= htmlspecialchars($post['title']) ?>
              </a>
            </h3>
            <p class="post-card-excerpt"><!-- Add excerpt here if available --></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
