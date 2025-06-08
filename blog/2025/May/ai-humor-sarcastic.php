<?php
$pageTitle = "The AI With A Sense Of Humour";
$publishDate = '2025-05-01';
$postPublishDate = date('F j, Y', strtotime($publishDate));
include dirname(__DIR__, 3) . '/includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="stylesheet" href="/assets/css/blog.css">
</head>

<body>

  <section class="blog-section">
    <main class="blog-main container">

      <!-- Full-Width Title -->
      <h2 class="post-title-fullwidth"><?php echo htmlspecialchars($pageTitle); ?></h2>


      <div class="content-wrapper">
        <article class="blog-post">
          <img src="/assets/images/laughing-spring.webp" alt="yellow funny laughing spring" class="post-image" />
          <h3 class="blog-subtitle">... and Develop Its Own Sense of Humor?</h3>

          <p class="post-meta">
            Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by
            <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="a cherry">
          </p>
          <p class="post-meta">
            in
            <span class="post-categories">
              <a href="/category/coding.php" class="post-category">tech</a>
              <a hidden href="/category/digital-marketing.php" class="post-category">digital</a>
              <a hidden href="/category/freelance-and-business.php" class="post-category">mindset</a>
              <a hidden href="/category/stories.php" class="post-category">stories</a>
              <a hidden href="/category/travels.php" class="post-category">travels</a>
              <a hidden href="/category/tech-writing-translations.php" class="post-category">wordcraft</a>
            </span>
          </p>

          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <!-- Full article content remains unchanged -->
            <!-- ... -->
            <!-- End of content -->

          </div>

          <div class="donate-link">
            Do you want to support me on my journey?
            <a href="https://www.paypal.com/donate/?hosted_button_id=FPLATGZCMZ2US" target="_blank">
              <button class="donate-button">Buy me a coffee!</button>
            </a>
          </div>

          <div style="display: flex; align-items: center; text-align: center;">
            <hr style="flex-grow: 1; border: none; height: 2px; background-color: #ccc;">
            <span style="padding: 0 10px; font-weight: bold; color: lightgrey;">More Posts</span>
            <hr style="flex-grow: 1; border: none; height: 2px; background-color: #ccc;">
          </div>
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