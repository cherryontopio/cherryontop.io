<?php
$pageTitle = "Course Pre-Launch";
$publishDate = '2025-07-08';
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

          <img src="/assets/images/book-promotion.webp" alt="promoting stand in a bookstore" class="post-image" />
          <h3 class="blog-subtitle">How to Promote Your Book Online</h3>

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
              <a href="/category/wordcraft.php" class="post-category">wordcraft</a>
            </span>
          </p>

          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>
            <h2>Welcome, Aspiring Authors!</h2>
            <p>So, you've written a book — congratulations! But now, the real work begins. Whether you're self-publishing or working with a publisher, the challenge of getting your book into the hands of readers is real. But don't worry, you're not alone in this journey!</p>
            <p>That's why I’m excited to introduce my upcoming course: <strong>How to Promote Your Book Online</strong>. This course will guide you step by step through the exact strategies you need to create a buzz, build your audience, and sell more books — all online!</p>



            <h3>Why Do You Need This Course?</h3>
            <p>As a writer, your story is your strength, but in today’s crowded market, it’s not enough to simply publish and wait. Successful book promotion requires a solid strategy, the right tools, and the knowledge of how to effectively use them. That’s where I come in!</p>
            <p>In this course, you’ll learn:</p>
            <ul>
              <li>How to identify your ideal readers (and where to find them!)</li>
              <li>The best platforms for promoting your book online</li>
              <li>Effective social media strategies that actually lead to book sales</li>
              <li>How to create eye-catching book launch campaigns that generate buzz</li>
              <li>How to use email marketing to build relationships and convert readers into loyal fans</li>
              <li>And so much more!</li>
            </ul>



            <h3>The Benefits of Taking This Course</h3>
            <p>By enrolling in this course, you’ll get a complete toolkit to promote your book like a pro. But here’s what really sets this course apart:</p>
            <ul>
              <li><strong>Actionable Steps:</strong> No fluff, just real strategies you can implement immediately!</li>
              <li><strong>Expert Guidance:</strong> Learn from someone who’s been there, done that, and successfully marketed their own books!</li>
              <li><strong>Community Support:</strong> Join a group of like-minded authors who are all working toward the same goal — getting their books into the hands of readers!</li>
              <li><strong>Real-World Examples:</strong> See what’s actually working in the book marketing world right now, not outdated advice!</li>
            </ul>



            <h3>Ready to Make Some Noise About Your Book?</h3>
            <p>The pre-launch of <strong>How to Promote Your Book Online</strong> is coming soon, and I want YOU to be one of the first to access this game-changing training!</p>
            <p>By signing up for the pre-launch, you’ll get:</p>
            <ol>
              <li>Early access to the course material.</li>
              <li>Exclusive bonuses that will take your book promotion efforts to the next level.</li>
              <li>A special discount for early birds.</li>
            </ol>
            <p>Don’t miss your chance to learn the most effective book promotion strategies — without spending hours on guesswork!</p>



            <h3>How to Get Involved</h3>
            <p>It’s simple! Just click the button below to join the pre-launch list. When the course opens, you’ll be the first to know — and you’ll be ready to hit the ground running!</p>
            <p>Sign up for the Pre-Launch below!</p>


            <h2>Let’s Do This!</h2>
            <p>Promoting your book doesn't have to feel overwhelming. With the right tools and strategies, you can confidently reach your readers and share your story with the world. I can’t wait to help you get there!</p>
            <p>Stay tuned for more exciting updates as we get closer to the official launch. Together, we’ll make sure your book gets the promotion it deserves.</p>

            <img src="/assets/images/" alt="" class="inpost-image">
            <!-- Add more content here -->
          </div>

          <br>
          <div class="divider"></div>

          <div class="subscription-divider">
            <?php include dirname(__DIR__, 3) . '/includes/subscription-widget.php'; ?>
          </div>
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