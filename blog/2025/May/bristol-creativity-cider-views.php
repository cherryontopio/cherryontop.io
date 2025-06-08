<?php
$publishDate = '2025-05-02';  // <-- Actual post publish date here
// Set the page title
$pageTitle = "Bristol Stole My Heart";

// Define the header file path dynamically
$headerPath = dirname(__DIR__, 3) . '/includes/header.php';

// Check if the header file exists before including it
if (file_exists($headerPath)) {
  include $headerPath;
} else {
  echo "<p style='color: red;'>Error: Header file not found!</p>";
}

// Remove this line to keep your original publish date:
// $publishDate = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

  <section class="blog-section">
    <main class="blog-main container">
      <h2 class="post-title-fullwidth">Bristol Stole My Heart</h2>

      <div class="content-wrapper">
        <article class="blog-post">

          <img src="/assets/images/bristol.webp" alt="Bristol" class="post-image" />
          <h3 class="blog-subtitle">A City of Creativity, Cider, and Stunning Views</h3>

          <p class="post-meta">
            Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by
            <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="a cherry">
          </p>

          <p class="post-meta">
            in
            <span class="post-categories">
              <a hidden href="/category/tech.php" class="post-category">tech</a>
              <a hidden href="/category/digital.php" class="post-category">digital</a>
              <a hidden href="/category/mindset.php" class="post-category">mindset</a>
              <a hidden href="/category/stories.php" class="post-category">stories</a>
              <a href="/category/travels.php" class="post-category">travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category">wordcraft</a>
            </span>
          </p>

          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <p>I’m about to leave Bristol. The sun is shining through the window, warming my cheeks and lifting my mood.</p>
            <p>It’s been a great few days. I arrived late on Monday afternoon, checked into the hostel which I had booked a few days earlier (more on The Blue Moon Hostel in a later article), and set out to explore the neighbourhood.</p>
            <p>Bristol is a vibrant town sitting in the southwest of England, perfectly positioned between the rolling hills of Somerset and the beautiful landscapes of Gloucestershire. It’s just a short drive from the coast, with easy access to the stunning beaches of North Somerset and the dramatic cliffs of South Wales. The city is built around the River Avon, which winds its way through, creating a natural harbor that has shaped Bristol’s history as a major port.</p>
            <p>One of the city’s most striking geographical features is its steep hills, which offer incredible viewpoints—especially from Clifton, where you can look out over the iconic Suspension Bridge and the deep Avon Gorge below. Despite its urban energy, Bristol is surrounded by green spaces, from Ashton Court’s sprawling estate to the rolling Mendip Hills just beyond the city limits. This mix of river, hills, and coastline gives Bristol a unique setting—one that feels both connected and independent, with a natural beauty that complements its lively character.</p>
            <p>Bristol has a vibe that’s hard to pin down but easy to fall in love with. It’s a city that refuses to take itself too seriously, blending old-world charm with a rebellious, creative spirit. Walk through the streets, and you’ll see grand Georgian townhouses standing side by side with vibrant graffiti, centuries-old pubs hosting live music nights, and a community that thrives on independence and innovation. Whether it’s the street performers on College Green, the laid-back cafes of Stokes Croft, or the bustling harborside bars, there’s an energy that makes the city feel alive without being overwhelming.</p>
            <p>At its heart, Bristol is a city of makers and doers—artists, musicians, engineers, and entrepreneurs who shape its character. It’s where Banksy first picked up a spray can, where Brunel left his engineering legacy, and where independent businesses thrive. There’s a fierce local pride here, not just in its history but in its future. People cycle more, shop local, and push for greener initiatives. It’s a place where cider is a way of life, music spills out from hidden venues, and every corner seems to tell a story. It’s quirky, welcoming, and just the right amount of weird—exactly the kind of city that sticks with you.</p>
            <p>Saying goodbye is something I’ve never found too easy — especially when I’ve enjoyed my stay. This time, however, I’m leaving knowing that I’ll be coming back.</p>

          </div>

          <div class="donate-link">
            Do you want to support me on my journey? <a href="https://www.paypal.com/donate/?hosted_button_id=FPLATGZCMZ2US" target="_blank">
              <button class="donate-button">Buy me a coffee!</button>
            </a>
          </div>

        </article>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/blog/sidebar.php"; ?>
      </div>

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