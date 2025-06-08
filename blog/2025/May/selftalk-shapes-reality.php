<?php
$publishDate = '2025-05-21';  // <-- Actual post publish date here
include dirname(__DIR__, 4) . '/includes/header.php';
?>

<?php
$pageTitle = "Blog Post";


// Get the current date
$publishDate = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>


  <section class="blog-section">
    <!-- Blog Main Content -->
    <main class="blog-main container">
      <!-- Full-Width Title -->
      <h2 class="post-title-fullwidth">How Self-Talk Shapes Your Reality</h2>

      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/smile-change-day.webp" alt="letters saying: a smile can change a day" class="post-image" />
          <h3 class="blog-subtitle">Positive Thinking Miniseries</h3>
          <!-- Insert the dynamic publish date here -->
          <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
          <p class="post-meta">
            in
            <span class="post-categories">
              <a hidden href="/category/tech.php" class="post-category">tech</a>
              <a hidden href="/category/digital.php" class="post-category"> digital </a>
              <a href="/category/mindset.php" class="post-category"> mindset</a>
              <a hidden href="/category/stories.php" class="post-category"> stories </a>
              <a hidden href="/category/travels.php" class="post-category"> travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft </a>
            </span>
          </p>


          <div class="post-content">
            <?php include dirname(__DIR__, 4) . '/includes/social-share.php'; ?>

            <p>
            <p>Our internal dialogue, or self-talk, plays a critical role in shaping our reality. If your self-talk is constantly negative, it reinforces self-doubt and fear. Positive self-talk, on the other hand, builds confidence and self-worth.</p>
            <p><strong>Louise Hay</strong> believed that affirmations — repeated positive statements — could heal mental and physical imbalances.</p>
            <h2>Examples of Positive Self-Talk</h2>
            <ul>
              <li>"I am capable and strong."</li>
              <li>"I deserve success and happiness."</li>
              <li>"I am growing and evolving every day."</li>
            </ul>
            <p>Catch yourself in the act of negative self-talk and reframe it. For example, replace "I always mess up" with "I'm learning from my mistakes."</p>
            <p>Want tools to guide your self-talk? Visit <a href="https://www.louisehay.com/affirmations/" target="_blank">Louise Hay's Affirmations</a>.</p>
            </p>
            <h3 class="miniseries">Read more in my miniseries: </h3>
            <ol>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/power-positive-thinking.php">The Power of Positive Thinking</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/growth-mindset-unlock-your-potential.php">Growth Mindset: Unlocking Your Potential</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/affirmations-rewire-brain.php">The Science of Affirmations: Rewire Your Brain</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/goal-setting-mindset.php">Mindset and Goal Setting: A Winning Combo</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/mindset-shaping-environment.php">The Role of Your Environment in Shaping Mindset</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/morning-routines-success.php">Morning Routines for a Winning Mindset</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/overcoming-limiting-beliefs.php">Overcoming Limiting Beliefs</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/reframing-failure-feedback.php">Reframing Failure as Feedback</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/selftalk-shapes-reality.php">How Self-Talk Shapes Your Reality</a>
              </li>
              <li>
                <a href="/blog/2025/May/positive-thinking-miniseries/visualisation-techniques.php">Visualisation Techniques That Work</a>
              </li>
            </ol>
            <img src="/assets/images/" alt="" class="inpost-image">


            <!-- Add more content here -->
          </div>
          <div>
          </div>
          <br>
          <div class="divider"></div>
          <div class="donate-link">
            <?php include dirname(__DIR__, 4) . '/includes/paypal.php'; ?>
          </div>

        </article>


        <!-- Sidebar Section -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/blog/sidebar.php"; ?>
      </div>

      <!-- FEATURED ITEMS SECTION -->

      <?php include dirname(__DIR__, 4) . '/includes/featured-index-items.php'; ?>

      <!-- FEATURED ITEMS END -->


    </main>

  </section>
  <?php
  $footerPath = dirname(__DIR__, 4) . '/includes/footer.php';
  if (file_exists($footerPath)) {
    include $footerPath;
  } else {
    echo "<p style='color: red;'>Error: Footer file not found!</p>";
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>