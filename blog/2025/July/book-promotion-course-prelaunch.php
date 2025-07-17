<?php
$pageTitle = "How to Promote Your Book";
$publishDate = '2025-07-09';
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

          <img src="/assets/images/writer-sitting.webp" alt="a female sitting on the floor writing on a laptop" class="post-image" />
          <h3 class="blog-subtitle">BECOME A BEST-SELLING AUTHOR: COURSE PRE-LAUNCH!</h3>

          <!-- Dynamic publish date -->
          <p class="post-meta">
            Published on <?php echo $postPublishDate; ?> • by
            <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="a cherry">
          </p>

          <p class="post-meta">
            in
            <span class="post-categories">
              <a hidden href="/category/tech.php" class="post-category">tech</a>
              <a href="/category/digital.php" class="post-category">digital</a>
              <a href="/category/mindset.php" class="post-category">mindset</a>
              <a href="/category/stories.php" class="post-category">stories</a>
              <a hidden href="/category/travels.php" class="post-category">travels</a>
              <a href="/category/wordcraft.php" class="post-category">wordcraft</a>
            </span>
          </p>

          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>
            <h2>Are You a Writer with a Book but No Readers?</h2>
            <p>Let’s be honest—writing a book is hard. Promoting it? That’s a whole different beast. You’ve poured your soul into your manuscript, survived the editing trenches, and now it’s sitting there, pristine and unread, like a gourmet meal in an empty restaurant. So how do you get people to actually <em>read</em> the thing?</p>
            <p>Welcome to the digital jungle, where visibility is everything and shouting into the void won’t cut it. If you're wondering how to get your book noticed online, you're not alone—and you're exactly who I created my new course for: <strong>How to Promote Your Book Online</strong>.</p>

            <h2>Why Most Books Sink Without a Trace</h2>
            <p>Here’s the brutal truth: great writing doesn’t guarantee great sales. In fact, many brilliant books never reach their audience simply because the author didn’t know how to market them. And no, tweeting “Buy my book!” every day isn’t a strategy—it’s a cry for help.</p>

            <h3>Common Mistakes Authors Make</h3>
            <ul>
              <li><strong>No clear audience:</strong> If your book is for “everyone,” it’s for no one.</li>
              <li><strong>No online presence:</strong> If readers can’t find you, they can’t find your book.</li>
              <li><strong>No strategy:</strong> Random posts and hope aren’t a launch plan.</li>
            </ul>

            <h2>What You’ll Learn in the Course</h2>
            <p>This isn’t another vague “build your brand” pep talk. It’s a practical, step-by-step guide to getting your book in front of the right readers. Here’s a sneak peek:</p>

            <h3>📚 Modules Include:</h3>
            <ol>
              <li><strong>Finding Your Ideal Reader</strong><br>
                Learn how to identify and target the people who will <em>actually</em> buy your book.</li>
              <li><strong>Building Your Author Platform</strong><br>
                From websites to social media, create a digital home that attracts readers.</li>
              <li><strong>Crafting Magnetic Content</strong><br>
                Blog posts, newsletters, and social media that don’t feel like spam.</li>
              <li><strong>Running Smart Promotions</strong><br>
                Launch strategies, giveaways, and ads that don’t drain your wallet.</li>
              <li><strong>Turning Readers into Fans</strong><br>
                Build a loyal audience that sticks around for your next book—and the next.</li>
            </ol>

            <h2>Pre-Launch Perks: Why Sign Up Now?</h2>
            <ul>
              <li>Early access to exclusive content</li>
              <li>A free downloadable checklist for your book launch</li>
              <li>A chance to win a 1-on-1 strategy session with me</li>
            </ul>

            <h3>🚀 Ready to Get Your Book Out There?</h3>
            <p>If you’re tired of watching your book gather digital dust, this course is your lifeline. Sign up for the pre-launch and let’s turn your passion project into a page-turning success.</p>

            <p><a href="/courses/how-to-promote-book-online.php"><button style="background-color: darkred; font-size: 30px; font-weight: 600; padding: 20px 30px; border-radius: 10px; color: white; border: none;">Sign up for the Pre-Launch!</button></a></p>
            <p><strong>Because your book deserves more than silence.</strong></p>


            <img src="/assets/images/" alt="" class="inpost-image">
            <!-- Add more content here -->
          </div>

          <br>
          <div class="divider"></div>

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