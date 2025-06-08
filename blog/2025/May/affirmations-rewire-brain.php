<?php
$pageTitle = "The Science of Affirmations: Rewire Your Brain";
$publishDate = '2025-05-21';
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

          <img src="/assets/images/be-positive.webp" alt="an uplifting quote" class="post-image" />
          <h3 class="blog-subtitle">Positive Thinking Miniseries</h3>


          <!-- Meta Info -->
          <p class="post-meta">
            Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by
            <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="a cherry icon">
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

            <p>Affirmations are positive statements that help you overcome negative thoughts. They can rewire your brain by creating new neural pathways — the science of neuroplasticity supports this.</p>
            <p>When practiced regularly, affirmations reshape your self-image and increase confidence and focus.</p>

            <h2>How to Use Affirmations Effectively</h2>
            <ul>
              <li>Use present tense: “I am” rather than “I will”</li>
              <li>Repeat them daily, ideally in front of a mirror</li>
              <li>Pair affirmations with visualization and emotion</li>
            </ul>

            <p>Louise Hay was a pioneer in using affirmations to shift mindset. Explore her guide on how to <a href="https://www.louisehay.com/affirmations/" target="_blank">create your own affirmations</a>.</p>
            <p>Affirmations are more than just words — they’re the seeds of transformation.</p>

            <h3>Read more in my miniseries:</h3>
            <ol>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/power-positive-thinking.php">The Power of Positive Thinking</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/growth-mindset-unlock-your-potential.php">Growth Mindset: Unlocking Your Potential</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/affirmations-rewire-brain.php">The Science of Affirmations: Rewire Your Brain</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/goal-setting-mindset.php">Mindset and Goal Setting: A Winning Combo</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/mindset-shaping-environment.php">The Role of Your Environment in Shaping Mindset</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/morning-routines-success.php">Morning Routines for a Winning Mindset</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/overcoming-limiting-beliefs.php">Overcoming Limiting Beliefs</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/reframing-failure-feedback.php">Reframing Failure as Feedback</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/selftalk-shapes-reality.php">How Self-Talk Shapes Your Reality</a></li>
              <li><a href="/blog/2025/May/positive-thinking-miniseries/visualisation-techniques.php">Visualisation Techniques That Work</a></li>
            </ol>

            <img src="/assets/images/" alt="" class="inpost-image">
          </div>

          <div class="divider"></div>

          <div class="donate-link">
            <?php include dirname(__DIR__, 3) . '/includes/paypal.php'; ?>
          </div>

        </article>

        <!-- Sidebar -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/blog/sidebar.php"; ?>
      </div>

      <!-- Featured Section -->
      <?php include dirname(__DIR__, 3) . '/includes/featured-index-items.php'; ?>

    </main>
  </section>

  <?php
  // Include footer
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