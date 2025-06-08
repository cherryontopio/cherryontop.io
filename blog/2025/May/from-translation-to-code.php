<?php
$publishDate = '2025-05-07';  // <-- Actual post publish date here
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
      <h2 class="post-title-fullwidth">From Languages to Programming </h2>

      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/Programming Algorithm.webp" alt="programming algorithm Meme" class="post-image" />
          <h3 class="blog-subtitle">How My Background in Translation Prepared Me for Learning to Code</h3>
          <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
          <p class="post-meta">
            in
            <span class="post-categories">
              <a href="/category/coding.php" class="post-category">tech</a>
              <a href="/category/digital-marketing.php" class="post-category"> digital </a>
              <a hidden href="/category/freelance-and-business.php" class="post-category"> mindset</a>
              <a hidden href="/category/stories.php" class="post-category"> stories </a>
              <a hidden href="/category/travels.php" class="post-category"> travels</a>
              <a href="/category/tech-writing-translations.php" class="post-category"> wordcraft </a>
            </span>
          </p>

          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <p>
              I was first introduced to programming at secondary school. It was a few months into my last year and midway through our Abitur (A-Levels) preparation, when a new subject called "Informatics" was introduced to our curriculum. <br><br>
              That was the time of the late Eighties and beginning of Nineties. Computers weren't really a thing and life seemed to be much simpler back then. <br><br>
              Well, at least mine did: I still remember the big hair, tacky earrings and ripped jeans I would wear to dance my teen troubles away at the 5–9 pm 'disco nights'. No mobile phone or other means of communication. <i> No way for my parents to trace me.</i> Imagine that. <br><br>
              In the midst of this carefree time, my studies were firmly rooted in humanistic subjects. Having learned to read at the tender age of four, I was fluent at reading on my first day of school, as six years old. And from the first day, languages were my domain. <br><br>
              So when this new teacher appeared in our graduation class, and started drawing all the funny geometrical shapes, linking them together, and trying to explain that that's how a computer program works, I would just zoom out and start to daydream about the boy I'd met at the disco. I was going to take my A-levels in languages, after all, so who cares about computers. Little did I know. <br><br>
              As predicted by my teachers and relatives, my career steered towards languages. Having learned some German and Russian at primary, and English at grammar school, I did a two-year stint as an au-pair in Britain and with a Cambridge Certificate of Proficiency in English hot off the presses, I began a career teaching languages and providing translation services. <br>
            <p style="text-align:center; letter-spacing: 0.3em;">. . .</p>
            <br>
            Fast forward a few decades after that Informatics class, and here I am, back to classes, doing my best to learn programming languages I'd love to add to the list of languages I'd studied and mastered. <br><br>
            While I do get frustrated from time to time, such as when I can't find a bug that seems to be messing up my website, I know that eventually, I'll get there. <br><br>
            <br>
            <p style="text-align:center; letter-spacing: 0.3em;">. . .</p>
            <br>
            How do I know? I know, because I've been and I've done it before. And this time round, I have a huge advantage: the transferable skills I gained when working as a translator. <br><br>
            Looking back, it's amazing how a love for languages eventually led me back to programming. In many ways, both paths are about translating complex ideas - whether across cultures or through code - into something understandable and accessible. The patience, problem-solving, and attention to detail that once served me in translating documents now guide me as I untangle code. <br><br>
            While the learning curve can still be steep, I know I'm equipped with skills that transcend any single language, whether spoken or programmed. I'm excited to see where this new chapter in coding takes me and how the worlds of language and technology will continue to intersect in surprising ways.

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