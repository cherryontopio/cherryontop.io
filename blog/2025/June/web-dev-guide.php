<?php
$pageTitle = "How to: Web Development";
$publishDate = '2025-06-06';
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

          <img src="/assets/images/web-design.webp" alt="app design drawings" class="post-image" />
          <h3 class="blog-subtitle">Introduction to Web Development</h3>
          <!-- Insert the dynamic publish date here -->
          <p class="post-meta">Published on <?php echo $postPublishDate; ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
          <p class="post-meta">
            in
            <span class="post-categories">
              <a href="/category/tech.php" class="post-category">tech</a>
              <a hidden href="/category/digital.php" class="post-category"> digital </a>
              <a hidden href="/category/mindset.php" class="post-category"> mindset</a>
              <a hidden href="/category/stories.php" class="post-category"> stories </a>
              <a hidden href="/category/travels.php" class="post-category"> travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft </a>
            </span>
          </p>


          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <p>Web development is the process of building websites and web applications. It encompasses both front-end and back-end development, ensuring functionality and aesthetics.</p>

            <h2>Front-End Development</h2>
            <p>The front-end is what users see and interact with. It includes:</p>
            <ul>
              <li><strong>HTML:</strong> Provides the structure of web pages.</li>
              <li><strong>CSS:</strong> Controls the styling and layout.</li>
              <li><strong>JavaScript:</strong> Enables interactivity and dynamic content.</li>
            </ul>

            <h2>Back-End Development</h2>
            <p>The back-end handles server-side operations and ensures data management. Common technologies include:</p>
            <ul>
              <li><strong>PHP:</strong> A popular scripting language for web applications.</li>
              <li><strong>Python:</strong> Known for its simplicity and versatility.</li>
              <li><strong>Node.js:</strong> Enables JavaScript to run on the server.</li>
              <li><strong>Databases:</strong> SQL or NoSQL databases store and manage data efficiently.</li>
            </ul>

            <h2>Importance of Responsive Design</h2>
            <p>Responsive design ensures websites function smoothly across different devices, improving user experience. Using frameworks like Bootstrap or CSS media queries can enhance responsiveness.</p>

            <h2>Web Hosting & Domain</h2>
            <p>To make a website accessible online, choosing a reliable web hosting service and a memorable domain name is essential.</p>
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