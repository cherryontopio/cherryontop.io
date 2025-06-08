<?php
$publishDate = '2025-05-03';  // <-- Actual post publish date here
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
      <h2 class="post-title-fullwidth">The Skills No Developer Can Do Without</h2>

      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/communication-skills.webp" alt="" class="post-image" />
          <h3 class="blog-subtitle">How Not to Be Just a Keyboard Hermit</h3>
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

            <p>So, you're knee-deep in HTML, CSS, and frameworks with names that sound like sci-fi villains (looking at you, React and Vue). That’s great! But here’s a little secret:</p>
            <p>being a web developer isn’t just about smashing code until the browser behaves. To really thrive in this field—and not just survive, you will need more than just tech chops. </p>
            <p>I'm talking about soft skills, the kind that help you deal with us, other humans (yes, those) and the ever-shifting tides of tech.</p>
            <p>Let me break down the essential soft and transferable skills you need to have in your webdev toolkit - no Git required.</p>
            <h2>Talk the Talk: Communication Skills</h2>
            <p>Believe it or not, coding isn't the only language you need to know. Whether you’re chatting with clients, brainstorming with designers, or explaining to your grandma what you actually do for a living, good communication is key.</p>
            <h3>Active Listening</h3>
            <p>You know how you actually <i>read</i> the error message before panicking? Apply that to humans. Listening - and I mean, really listening - helps you understand what people need (even if they don’t know how to say it themselves).</p>
            <h3>Verbal and Written Communication</h3>
            <p>You don’t need to be Shakespeare, but being able to explain your brilliant idea or bug fix without a 20-slide PowerPoint is gold. Clear documentation, emails, Slack messages - these are your real-world unit tests for communication.</p>
            <h2>Team Spirit: Collaboration</h2>
            <p>Unless you're building a website on a desert island (in which case, good luck without Wi-Fi), you’ll be working with other people. Designers, product managers, other devs - teamwork makes the dream site work.</p>
            <h3>Teamwork</h3>
            <p>Working with others = more than just pushing to the same repo. Share ideas, ask questions, help out, and don’t be that dev who hoards knowledge like a dragon hoards gold.</p>
            <h3> Conflict Resolution</h3>
            <p>Disagreements happen. Someone wants Comic Sans. You cry inside. But instead of rage-quitting, learn to navigate conflicts gracefully. A calm, solution-focused convo beats a passive-aggressive Jira comment any day.</p>
            <h2>Bug Busters: Problem-Solving and Critical Thinking</h2>
            <p>Every day as a developer is basically a series of puzzles, minus the jigsaw pieces and plus some existential dread.</p>
            <h3>Analytical Thinking</h3>
            <p>Breaking down problems into bite-sized chunks is half the job. Think Sherlock Holmes, but with stack traces.</p>
            <h3>Creativity and Innovation</h3>
            <p>You don’t need a beret and a latte to be creative. Think of elegant UI solutions, clever code workarounds, or ways to make the user experience so smooth they think it’s magic. (Spoiler Alert: it’s just your genius.)</p>
            <h2>Beat the Clock: Time Management and Organization</h2>
            <p>Deadlines. Meetings. Code reviews. The new hot JavaScript framework you have to learn. It’s <i>a lot</i>.</p>
            <h3>Prioritization</h3>
            <p>Some things can wait. Some things are on fire. Knowing which is which helps you get things done without losing your mind.</p>
            <h3>Attention to Detail</h3>
            <p>One missing semicolon can break the site. Typos in client names can break the relationship. So, do sweat the small stuff (at least a little).</p>
            <h2>Go with the Flow: Adaptability and Resilience</h2>
            <p>Tech changes faster than you say 'depreciated.' If you hate change, the field might not be your forewer home.</p>
            <h3>Lifelong Learning</h3>
            <p>As a techie, you'll always need to be leveling up. Whether it's new frameworks, accessibility standards, or just finally understanding regex, you'll need to stay curious and keep learning.</p>
            <h3>Resilience</h3>
            <p>You <i>will</i>break something. You <i>will</i>hit a wall. You <i>will</i>also fix it, learn from it, and move on. Resilience is your secret superpower.</p>
            <h2>You're More Than Just a Coder</h2>
            <p>Yes, knowing your way around code is essential - but it's the soft and transferable skills that turn a good developer into a great one. Communication, collaboration, time smarts, and a flexible mindset make the difference between just building websites and <i>building a career</i>.</p>
            <p>So, next time you're brushing up on your JavaScript, maybe sprinkle in some teamwork, a dash of empathy, and a healthy respect for meeting deadlines. Because in the wild world of eb development, it's not just the code that needs to be clean - it's your ability to connect, adapt, and thrive.</p>

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