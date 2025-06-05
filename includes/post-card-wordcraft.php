<?php
include __DIR__ . '/../blog/post-data.php'; // Adjust path if needed

$allPosts = getAllPosts();

// Filter posts by category 'wordcraft'
$wordcraftPosts = array_values(array_filter($allPosts, function ($post) {
    return isset($post['category']) && strtolower(trim($post['category'])) === 'wordcraft';
}));

// Sort posts by date descending (newest first)
usort($wordcraftPosts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});
?>

<section class="category-post-content">
  <div class="front-page-content">
    <div class="front-sections-headings">
      <h1>All Posts in Wordcraft</h1>
    </div>
    <div class="post-card-container">
      <?php foreach ($wordcraftPosts as $post): ?>
        <div class="post-card-item">
          <img src="<?= htmlspecialchars($post['image'] ?? '') ?>" alt="<?= htmlspecialchars($post['alt'] ?? '') ?>">
          <div class="post-card-info">
            <h3 class="post-card-heading">
              <a href="<?= htmlspecialchars($post['link'] ?? '#') ?>">
                <?= htmlspecialchars($post['title'] ?? 'Untitled') ?>
              </a>
            </h3>
            <p class="post-card-excerpt"><?= htmlspecialchars($post['excerpt'] ?? '') ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
