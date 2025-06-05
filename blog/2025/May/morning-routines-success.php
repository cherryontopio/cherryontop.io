
<?php 
include dirname(__DIR__, 3) . '/includes/header.php';
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
        <h2 class="post-title-fullwidth">Morning Routines for a Winning Mindset</h2>

        <!-- Blog and Sidebar Wrapper -->
        <div class="content-wrapper">
          <!-- Main Blog Post -->
          <article class="blog-post">
            
            <img src="/assets/images/today-good-day.webp" alt="sign: today is a good day" class="post-image" />
            <h3 class="blog-subtitle">Positive Thinking Miniseries</h3> 
            <!-- Insert the dynamic publish date here -->
             <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
            <p class="post-meta">
    in 
    <span class="post-categories">
        <a hidden href="/category/tech.php" class="post-category">tech</a>
        <a hidden href="/category/digital.php" class="post-category"> digital  </a>
        <a  href="/category/mindset.php" class="post-category"> mindset</a>
        <a hidden href="/category/stories.php" class="post-category"> stories  </a>
        <a hidden href="/category/travels.php" class="post-category"> travels</a>
        <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft  </a>
    </span>
</p>

            
            <div class="post-content">
               <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?> 
                
                  <p>How you start your day sets the tone for everything that follows. A powerful morning routine can elevate your mindset, energize your body, and align you with your goals.</p>
    <p>Start small — even 10 minutes of intentional practice can make a big difference.</p>
    <h2>Elements of a Powerful Morning Routine</h2>
    <ol>
        <li>Practice gratitude or journaling</li>
        <li>Move your body — walk, stretch, or workout</li>
        <li>Visualize your day with clarity and confidence</li>
    </ol>
    <p>Many high achievers swear by their morning rituals. Experiment and find what makes you feel motivated, focused, and centered.</p>
    <p>Explore tools and templates at <a href="https://www.miraclemorning.com/" target="_blank">The Miracle Morning</a> by Hal Elrod.</p>
    <h3 class="miniseries">Read more in my miniseries: </h3>
<ol>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/power-positive-thinking.php" >The Power of Positive Thinking</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/growth-mindset-unlock-your-potential.php" >Growth Mindset: Unlocking Your Potential</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/affirmations-rewire-brain.php" >The Science of Affirmations: Rewire Your Brain</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/goal-setting-mindset.php" >Mindset and Goal Setting: A Winning Combo</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/mindset-shaping-environment.php" >The Role of Your Environment in Shaping Mindset</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/morning-routines-success.php" >Morning Routines for a Winning Mindset</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/overcoming-limiting-beliefs.php" >Overcoming Limiting Beliefs</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/reframing-failure-feedback.php" >Reframing Failure as Feedback</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/selftalk-shapes-reality.php" >How Self-Talk Shapes Your Reality</a>
</li>
<li>
<a href="/blog/2025/May/positive-thinking-miniseries/visualisation-techniques.php" >Visualisation Techniques That Work</a>
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