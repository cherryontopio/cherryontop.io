<?php

include __DIR__ . '/../blog/post-data.php'; // Adjust path if needed

$allPosts = getAllPosts();

// Filter posts by category 'mindset'
$mindsetPosts = array_filter($allPosts, function ($post) {
    return isset($post['category']) && strtolower($post['category']) === 'mindset';
});

// Sort mindset posts by date descending (newest first)
usort($mindsetPosts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});
?>

<section class="category-post-content">
  <div class="front-page-content">
    <div class="front-sections-headings">
      <h1>All Posts in Mindset</h1>
    </div>
    <div class="post-card-container">
      <?php foreach ($mindsetPosts as $post): ?>
        <div class="post-card-item">
          <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['alt']) ?>">
          <div class="post-card-info">
            <h3 class="post-card-heading">
              <a href="<?= htmlspecialchars($post['link']) ?>">
                <?= htmlspecialchars($post['title']) ?>
              </a>
            </h3>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
