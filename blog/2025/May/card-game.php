<?php
$publishDate = '2025-05-01';  // <-- Actual post publish date here
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


  <section>

    <main class="blog-main container">
      <!-- Full-Width Title -->
      <h2 class="post-title-fullwidth">print(“Play Your Cards Right”)</h2>

      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/code-cards.webp" alt="card game code" class="post-image" />
          <h3 class="blog-subtitle"></h3>
          <!-- Insert the dynamic publish date here -->
          <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
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

            <p>Do you ever get that strange hunch in your gut? The eerie feeling that tells you something is simply perfect for you?

              <br><br>The BootCamp live session ended over an hour ago, and yet, I’m still sitting here, mulling over the exercise we’ve been working on for the past two days.

              <br><br>It’s a simple card game, one you’re sure to know. Called ‘Play Your Cards Right’, it requires you to predict whether the next card to be turned over is higher or lower than the one currently shown.

              <br><br>The code itself is fairly easy to grasp, even for someone completely new to Python like me. It does what it’s supposed to do and runs smoothly enough. Smoother than my website, I’d even say. And yet… I can’t help but think about how to make the code visual. And auditory. And thus more interesting.

              <br><br>There is a way, says our tutor and adds that he’s going to show us tomorrow.

              <br><br>After all, Rome wasn’t built in a day, and learning Software Development is just like learning anything else — the harder you study the basics, the easier your learning gets later on.
            </p>
            <!-- Add more content here -->
          </div>
          <div>
          </div>
          <div class="donate-link">
            Do you want to support me on my journey? <a href="https://www.paypal.com/donate/?hosted_button_id=FPLATGZCMZ2US" target="_blank">
              <button class="donate-button">Buy me a coffee!</button>
            </a>
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

</body>

</html>