<?php
$pageTitle = "Catford";
$publishDate = '2025-05-14';
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

          <img src="/assets/images/Catford Cat.webp" alt="a statue of a cat in catford" class="post-image" />
          <h3 class="blog-subtitle">Thinking I’d Be Cozy by Nine</h3>
          <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
          <p class="post-meta">
            in
            <span class="post-categories">
              <a hidden href="/category/tech.php" class="post-category">tech</a>
              <a hidden href="/category/digital.php" class="post-category"> digital </a>
              <a hidden href="/category/mindset.php" class="post-category"> mindset</a>
              <a hidden href="/category/stories.php" class="post-category"> stories </a>
              <a href="/category/travels.php" class="post-category"> travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft </a>
            </span>
          </p>


          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <p>
              The London chat in the Hostelworld app was buzzing with messages. Solo travelers from around the world were typing out invites and suggestions, hoping someone would respond. Young or old, it didn’t matter—when you're traveling alone, you welcome anyone willing to share a drink.
              <br><br>Being used to traveling solo, I wasn’t too eager to reply. Besides, I wasn’t going to be anywhere near Central London that week. I was planning to stay in a hostel further south.
              <br><br>I didn’t quite know what to expect from a place so far from all the London sights and interesting places. Located in Catford, about a mile and a half from Lewisham, the only advantage I could think of—when really trying to come up with something—was its close proximity to University Hospital Lewisham.
              <br><br>To the best of my knowledge, I wasn’t suffering from any illnesses, and so I intended to stick to my original plan: find a neighborhood where I might eventually rent or even buy a place and settle down.
              <br><br>It was a particularly cold evening—for that time of year, at least. I finished work at 7 p.m. and took the first bus heading to Woolwich. Having gotten quite good at getting around in the past month, I foolishly thought I could make it to the hostel in an hour, provided I stayed organized and moved quickly.
              <br><br>Wrong.
              <br><br>An hour after we left the bus station, I was standing at a bus stop in Woolwich, shivering with cold—my feet doing a kind of frantic dance, urged on by my brain’s theory that as long as the body keeps moving, it can’t truly feel the cold.
              <br><br>Finally, my next bus arrived, and I got on, knowing that forty minutes from now, I’d be sleeping in a warm bed.

            </p>
            <!-- Add more content here -->
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