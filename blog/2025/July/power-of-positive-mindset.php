<?php
$pageTitle = "The Power of a Healthy and Positive Mindset";
$publishDate = '2025-07-01';
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
    <!-- Blog Main Content -->
    <main class="blog-main container">
      <!-- Full-Width Title -->
      <h2 class="post-title-fullwidth"><?php echo htmlspecialchars($pageTitle); ?></h2>

      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/sometimes-good-things-come-in-large-packages.webp" alt="Sign: Sometimes good things come in large packages" class="post-image" />
          <h3 class="blog-subtitle">Why Mindset Matters More Than We Think</h3>

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
              <a href="/category/mindset.php" class="post-category">mindset</a>
              <a hidden href="/category/stories.php" class="post-category">stories</a>
              <a hidden href="/category/travels.php" class="post-category">travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category">wordcraft</a>
            </span>
          </p>

          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>
            <p>
              Life isn’t always easy. Some days are great, others test our patience, confidence, or energy. But the one thing we always have some control over is how we respond—and that starts with mindset. A healthy and positive mindset doesn’t mean ignoring reality or pretending everything is fine. It means choosing to meet life with strength, optimism, and clarity.
            </p>
            <p>
              Our mindset affects everything—how we feel about ourselves, how we treat others, how we react under pressure, and what we believe is possible. A positive mindset doesn’t just improve your mood; it shapes your actions, habits, and even the opportunities that show up in your life.
            </p>

            <ul>
              <li><strong>It builds resilience:</strong> When life throws curveballs, your mindset determines whether you break or bounce back.</li>
              <li><strong>It fuels motivation:</strong> A hopeful outlook can keep you going when things get tough.</li>
              <li><strong>It improves relationships:</strong> People are naturally drawn to those who radiate positivity and self-awareness.</li>
              <li><strong>It boosts mental and physical health:</strong> Countless studies link positive thinking to lower stress, better sleep, and stronger immune function.</li>
            </ul>

            <h3>Small Shifts That Make a Big Difference</h3>

            <p>
              Changing your mindset doesn't require a dramatic transformation overnight. It’s the small, daily choices that slowly reshape the way we think and feel.
            </p>

            <ol>
              <li><strong>Practice gratitude:</strong> Write down three things you're grateful for every day. It trains your brain to focus on what’s good.</li>
              <li><strong>Challenge negative thoughts:</strong> Notice when you're spiraling and gently ask yourself: “Is this thought helpful or just a fear on repeat?”</li>
              <li><strong>Take care of your body:</strong> Nutrition, movement, and sleep directly impact your mental state.</li>
              <li><strong>Surround yourself with positivity:</strong> Whether it’s people, books, podcasts, or music—consume what lifts you up.</li>
              <li><strong>Be kind to yourself:</strong> You’re human. Progress matters more than perfection.</li>
            </ol>

            <h3>The Ripple Effect</h3>

            <p>
              A healthy mindset doesn’t just change your internal world—it transforms your external reality. You begin to see opportunities where there used to be fear. You recover faster from setbacks. You attract better relationships, make clearer decisions, and most importantly, you start to believe in what’s possible.
            </p>

            <p>
              The truth is, your mindset shapes your story. So why not make it a good one?
            </p>
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