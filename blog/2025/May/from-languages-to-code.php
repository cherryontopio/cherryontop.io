<?php
$pageTitle = "From Languages to Code";
$publishDate = '2025-05-24';
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

          <img src="/assets/images/cat-pc.webp" alt="meme of a cat looking at a computer screen" class="post-image" />
          <h3 class="blog-subtitle">My Personal Journey</h3>
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

            <p>Typing was one the many things I learned due to my laziness. As part of my A-Levels in English, I had to prepare a 15-minute speech on 25 subjects. Depending on your handwriting, that’s roughly 15 pages on each topic, i.e., 15 x 25 = 375 pages of written text.</p>
            <p>In other words: a lot of work. Work, which at 18 you’re not necessarily keen to do. That’s when my laziness kicked in. I remember asking myself: ‘Oh boy, how can I make this go away?’</p>
            <p>Knowing very well that I couldn’t, I decided to settle for the second best solution I managed to come up with: learning how to type. Not only would I halve the number of pages by typing them, sitting behind a typewriter would make me look professional, I though.</p>
            <p>Well, the examiners never saw my typed notes and I doubt I looked professional to them as they listened to me stumbling over my words. Despite that, I did get an A. And over the course of the following years, I used my typing skills to build a career as a translator and writer. That was then. Now I’m using my typing skills to learn programming.</p>
            <h2>The skills I learned as a translator that I can ‘take’ with me to coding</h2>
            <p>As a translator, I’m used to reading between the lines. A good translation isn’t about swapping words; it’s about capturing context, tone, and intent and translating those into the target language in a way that’s relevant and clear for the reader.</p>
            <p>In programming, I find myself applying the same skills. To code well, I need to understand how different parts of the code interact and anticipate how users will engage with the final product. As with translation, it’s all about making things clear and relevant for the end user. </p>
            <p>Both translators and programmers have to interpret abstract ideas and rely on specific tools — grammar and idioms, or code libraries and syntax — to convey meaning in the most accurate, effective way. My experience reading between the lines as a translator now helps me grasp the intent behind each line of code.</p>
            <h3>Attention to Detail</h3>
            <p>In both translation and coding, the tiniest details matter. In translation, misinterpreting a single word or cultural nuance can change the meaning of an entire sentence. Mistranslations can even have serious consequences; it’s said that a mistranslation of the Japanese word <a href="https://www.nsa.gov/portals/75/documents/news-features/declassified-documents/tech-journals/mokusatsu.pdf">mokusatsu</a> during WWII contributed to the Hiroshima bombing.</p>
            <p>In programming, attention to detail is equally crucial. A single misplaced comma or unclosed loop can cause the code to malfunction. My habit of carefully checking each word as a translator now serves me well in debugging, where a similar level of precision is essential.</p>
            <h3>Logical Problem-Solving Skills</h3>
            <p>Translation and programming both involve constant problem-solving. As a translator, I often encountered expressions without direct equivalents in the target language. Finding a solution that preserved the original meaning required creativity and logical thinking.</p>
            <p>As a beginner programmer, I’m seeing similar challenges. Debugging, optimizing, and making code efficient all demand problem-solving skills and patience. Years of translation work have taught me to approach each problem critically, and I’m now applying this mindset to coding as I learn to work through errors and refine my code to get it just right.</p>
            <h3>Syntax and Rules</h3>
            <p>Every language has its own set of rules. A sentence in English might have a totally different structure in Spanish or Mandarin, so translating requires precision and strict attention to syntax.</p>
            <p>The same applies in programming. Programming languages are rule-bound, and even small errors — like a missing semicolon or an extra bracket — can crash a program. As a translator, I’m already used to working within a rule-based system, so adapting to programming syntax feels like a natural extension of my language skills.</p>
            <h3>Persistence and Patience</h3>
            <p>Persistence is a crucial part of both translating and coding. As a translator, I sometimes had to try multiple versions before I found the right phrase or nuance, especially when dealing with difficult or culturally specific expressions. Coding is no different. Hours of debugging, testing, and refining can go into getting everything to work correctly.</p>
            <p>The patience I developed as a translator, reworking my translations until they felt perfect, now applies directly to the debugging and refining process in programming. Both require a commitment to refining my work until it meets a high standard.</p>
            <div class="separator">. . .</div>
            <p>As I transition from translating to programming, I’m finding that the core skills that made me a successful translator — attention to detail, problem-solving, patience, and precision — are just as essential in the world of coding. Each line of code is like a phrase in a foreign language, with syntax to follow, intent to capture, and meaning to communicate.</p>
            <p>For me, the challenge of coding feels like learning yet another language — one that lets me create in new ways while drawing on everything I’ve learned as a translator.</p>
            <p>In both fields, I’m reminded that the ability to interpret, adapt, and communicate is what makes these disciplines so similar — and why I’m excited to bring my experience into this new and fascinating field.</p>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>