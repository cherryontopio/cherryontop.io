<?php
$publishDate = '2025-05-05';  // <-- Actual post publish date here
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
    <!-- Blog Main Content -->
    <main class="blog-main container">
      <!-- Full-Width Title -->
      <h2 class="post-title-fullwidth">The Stories of the Imperfect Perfectionist</h2>

      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/suitcases.webp" alt="suitcases on top of each other" class="post-image" />
          <h3 class="blog-subtitle">Finding Perfection in the Imperfect</h3>
          <!-- Insert the dynamic publish date here -->
          <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
          <p class="post-meta">
            in
            <span class="post-categories">
              <a href="/category/coding.php" class="post-category">tech</a>
              <a href="/category/digital-marketing.php" class="post-category"> digital </a>
              <a hidden href="/category/freelance-and-business.php" class="post-category"> mindset</a>
              <a hidden href="/category/stories.php" class="post-category"> stories </a>
              <a hidden href="/category/travels.php" class="post-category"> travels</a>
              <a hidden href="/category/tech-writing-translations.php" class="post-category"> wordcraft </a>
            </span>
          </p>


          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <p>I set out with a promise to myself — to write about the places I visited every single day. I would post on Instagram every single day. That was the plan.
              That was my intent when I ended my lease and decided to become a part-time digital nomad.

              <br><br>I was determined. I was resolute. I was committed.

              <br><br>Now, a month has passed since I ended my tenancy and embraced this new, part-time nomadic life. But, I’ve only posted a handful of times. I published my last article here on Medium ten days ago. Since then — silence.

              <br><br>It’s not that I don’t have anything to write about. Quite the opposite. My camera roll is bursting at the seams, packed with memories and experiences from the places I’ve visited so far.

              <br><br>Bristol, Dartford, Canterbury, Whitstable, London… each place has brought new experiences, new perspectives, and new possibilities for my life. Some of these adventures have even reignited dreams I once had, but never really pursued.

              <br><br>I have so much to write about. And yet, every time I sit down to do it, the silent editor within starts to censor my thoughts.

              <br><br>What if this is too personal? What if I’m sharing too much of myself? What if someone will use the things I write against me someday? What if I don’t have anything valuable to say? The imposter syndrome hits hard.

              <br><br>Being a perfectionist is a curse and a blessing at the same time.

              <br><br>But here’s the thing: I’ve realized that the silent editor within isn’t the only voice I need to listen to. Yes, it’s a voice that keeps me in check, that tries to protect me from judgment and failure, but it also keeps me from growing.

              <br><br>I’ve seen so many new places, met fascinating people, and felt the thrill of pushing my boundaries in ways I never imagined. These experiences are too valuable to lock away behind hesitation and fear. Or are they?

              <br><br>Well, I’ve made a decision: I’ll write anyway. I’ll share the messy, raw, and imperfect parts of my journey because they’re just as real as the polished moments. If I can’t write about the vulnerability of being a digital nomad, then what’s the point of it all?

              <br><br>This is the journey — the highs and lows, the moments of triumph and doubt. And for better or worse, it’s all worth sharing. Because if there’s one thing I’ve learned from this journey, it’s that the real stories are the ones that feel uncomfortable to tell.

              <br><br>I am the imperfect perfectionist. I like to think I’ve got it all figured out — but the truth is, I’m still learning, stumbling, and figuring things out as I go. Take what you read here with a pinch of salt.

              <br><br>After all, you always learn the right lessons from the wrong people.
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