<?php
$pageTitle = "How to: Digital Marketing";
$publishDate = '2025-06-07';
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


      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/digital-marketing-sign.webp" alt="digital marketing sign made of letter cubes" class="post-image" />
          <h3 class="blog-subtitle">What Is Digital Marketing?</h3>
          <!-- Insert the dynamic publish date here -->
          <p class="post-meta">Published on <?php echo $postPublishDate; ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
          <p class="post-meta">
            in
            <span class="post-categories">
              <a hidden href="/category/tech.php" class="post-category">tech</a>
              <a href="/category/digital.php" class="post-category"> digital </a>
              <a hidden href="/category/mindset.php" class="post-category"> mindset</a>
              <a hidden href="/category/stories.php" class="post-category"> stories </a>
              <a hidden href="/category/travels.php" class="post-category"> travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft </a>
            </span>
          </p>


          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <p>Digital marketing is the art of promoting a website or business through various online channels. It helps attract visitors, generate leads, and enhance brand awareness.</p>

            <h2>Search Engine Optimization (SEO)</h2>
            <p>SEO improves a website’s visibility on search engines like Google. Key strategies include:</p>
            <ul>
              <li><strong>Keyword Optimization:</strong> Using relevant keywords strategically within content.</li>
              <li><strong>Quality Content:</strong> Writing informative and valuable articles to engage readers.</li>
              <li><strong>Backlinks:</strong> Getting other reputable websites to link to yours.</li>
              <li><strong>Page Speed Optimization:</strong> Ensuring fast-loading web pages.</li>
            </ul>

            <h2>Social Media Marketing</h2>
            <p>Social media platforms like Facebook, Instagram, and LinkedIn help businesses connect with audiences. Posting engaging content and interacting with followers increases brand exposure.</p>

            <h2>Email Marketing</h2>
            <p>Email campaigns allow businesses to reach potential customers directly. Personalized emails with compelling offers can increase engagement and sales.</p>

            <h2>Content Marketing</h2>
            <p>Creating valuable content—such as blog posts, videos, and infographics—helps educate and attract audiences while establishing credibility.</p>

            <h2>Paid Advertising</h2>
            <p>Online advertising, such as Google Ads or Facebook Ads, allows businesses to target specific audiences for better reach and conversions.</p>
            <img src="/assets/images/" alt="" class="inpost-image">


            <!-- Add more content here -->
          </div>
          <div>
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

      <!-- FEATURED ITEMS SECTION -->

      <?php include dirname(__DIR__, 3) . '/includes/featured-index-items.php'; ?>

      <!-- FEATURED ITEMS END -->


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