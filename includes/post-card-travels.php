<?php
include __DIR__ . '/../blog/post-data.php'; // Adjust path if needed

$allPosts = getAllPosts();

// Filter posts by category 'travels'
$travelPosts = array_filter($allPosts, function ($post) {
    return isset($post['category']) && strtolower($post['category']) === 'travels';
});

// Sort travel posts by date descending (newest first)
usort($travelPosts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});
?>

<section class="category-post-content">
  <div class="front-page-content">
    <div class="front-sections-headings">
      <h1>All Posts in Travels</h1>
    </div>
    <div class="post-card-container">
      <?php foreach ($travelPosts as $post): ?>
        <div class="post-card-item">
          <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['alt']) ?>">
          <div class="post-card-info">
            <h3 class="post-card-heading">
              <a href="<?= htmlspecialchars($post['link']) ?>">
                <?= htmlspecialchars($post['title']) ?>
              </a>
            </h3>
            <p class="post-card-excerpt"><!-- Optional: insert excerpt here if available --></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
