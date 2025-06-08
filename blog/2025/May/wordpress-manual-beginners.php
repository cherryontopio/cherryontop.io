<?php
$pageTitle = "Getting Started with WordPress";
$publishDate = '2025-05-01'; // Correct date, don’t overwrite it later

include dirname(__DIR__, 3) . '/includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <section class="blog-section">
    <main class="blog-main container">
      <h2 class="post-title-fullwidth"><?php echo htmlspecialchars($pageTitle); ?></h2>

      <div class="content-wrapper">
        <article class="blog-post">
          <img src="/assets/images/wordpress-logo.webp" alt="logo of WordPress.org" class="post-image" />
          <h3 class="blog-subtitle">A Beginner’s Manual</h3>

          <p class="post-meta">
            Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by
            <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="a cherry">
          </p>

          <!-- Categories -->
          <p class="post-meta">
            in
            <span class="post-categories">
              <a href="/category/tech.php" class="post-category">tech</a>
              <a href="/category/digital.php" class="post-category">digital</a>
              <!-- hidden categories -->
              <a hidden href="/category/mindset.php" class="post-category">mindset</a>
              <a hidden href="/category/stories.php" class="post-category">stories</a>
              <a hidden href="/category/travels.php" class="post-category">travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category">wordcraft</a>
            </span>
          </p>

          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <!-- YOUR FULL POST CONTENT HERE (unchanged from your original) -->

          </div>

          <br>
          <div class="donate-link">
            Do you want to support me on my journey?
            <a href="https://www.paypal.com/donate/?hosted_button_id=FPLATGZCMZ2US" target="_blank">
              <button class="donate-button">Buy me a coffee!</button>
            </a>
          </div>
          <br>
        </article>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/blog/sidebar.php"; ?>
      </div>

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