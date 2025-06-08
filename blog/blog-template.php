<?php
include dirname(__DIR__, 3) . '/includes/header.php';

// Format the publish date if it exists
if (!empty($publishDate)) {
  $postPublishDate = date('F j, Y', strtotime($publishDate));
} else {
  $postPublishDate = 'Unknown date';
}

// Set a default title if not already set
if (!isset($pageTitle)) {
  $pageTitle = "Blog Post";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
</head>

<body>

  <section class="blog-section">
    <!-- Blog Main Content -->
    <main class="blog-main container">
      <!-- Full-Width Title -->
      <h2 class="post-title-fullwidth"><?php echo htmlspecialchars($pageTitle); ?></h2>

      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/website-management.webp" alt="cherryontop.io homepage" class="post-image" />
          <h3 class="blog-subtitle">XXXX</h3>

          <!-- Dynamic publish date -->
          <p class="post-meta">
            Published on <?php echo $postPublishDate; ?> • by
            <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="a cherry">
          </p>

          <p class="post-meta">
            in
            <span class="post-categories">
              <a hidden href="/category/tech.php" class="post-category">tech</a>
              <a hidden href="/category/digital.php" class="post-category">digital</a>
              <a hidden href="/category/mindset.php" class="post-category">mindset</a>
              <a hidden href="/category/stories.php" class="post-category">stories</a>
              <a hidden href="/category/travels.php" class="post-category">travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category">wordcraft</a>
            </span>
          </p>

          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>
            <p>XXXXX</p>
            <img src="/assets/images/" alt="" class="inpost-image">
            <!-- Add more content here -->
          </div>

          <br>
          <div class="divider"></div>
          <div class="donate-link">
            <?php include dirname(__DIR__, 3) . '/includes/paypal.php'; ?>
          </div>
        </article>

        <!-- Sidebar Section -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/blog/sidebar.php"; ?>
      </div>

      <!-- Featured Items -->
      <?php include dirname(__DIR__, 3) . '/includes/featured-index-items.php'; ?>
    </main>
  </section>

  <?php
  $footerPath = dirname(__DIR__, 3) . '/includes/footer.php';
  if (file_exists($footerPath)) {
    include $footerPath;
  } else {
    echo "<p style='color: red;'>Error: Footer file not found!</p>";
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>