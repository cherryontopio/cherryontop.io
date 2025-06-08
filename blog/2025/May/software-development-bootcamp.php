<?php
$pageTitle = "Can You Transform Your Career in 14 Weeks?";
$publishDate = '2025-05-07';
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

          <img src="/assets/images/code-dark.webp" alt="computer screens with code" class="post-image" />
          <h3 class="blog-subtitle">Gaining New Skills in a Software Development Bootcamp</h3>
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

            <p>
              Ever wondered if you could change your career in just a few months? I did it. After completing an intensive 14-week Software Development bootcamp, I went from being a beginner to earning a certificate in Software Development — and I’m ready to share the story of how it all happened.
              <br><br>
            <h3>The World of Software Development</h3>
            <br>
            When I first started the <a href="https://theskillsnetwork.com/insights-resources/blog/skills-bootcamps-hot-right-now">bootcamp</a>, I had no idea what I was getting myself into. All I knew was that I was curious about software development and wanted to dive in. The first thing I learned was that software development isn’t just about writing code — it’s about solving problems. Whether it’s stock control, order processing, or improving manufacturing processes, software plays a role in almost every industry.
            <br>
            <br>
            But software development is a team effort. I discovered the importance of communication and collaboration across different roles. From Product Owners to UX/UI Designers, each person plays a critical part in delivering a successful product. Understanding how each of these roles fits into the bigger picture was eye-opening for me and helped me grasp the full scope of what it takes to create software.
            <br><br> Once I understood the basics, I jumped into coding and software architecture. I learned Python and how to apply algorithms, data structures, and APIs to build software that works. I also learned about version control — tools like Git that help developers collaborate by tracking and managing code changes.
            <br><br> One of the most exciting parts was learning about UI (User Interface) Design in Week 4. I learned how to design intuitive, user-friendly interfaces and make sure applications work well across all devices (smartphones, desktops, etc.). I also dove into security — understanding how to build applications that protect user data and defend against common security threats.
            <br>

            <br>
            The highlight of the bootcamp was the Industry Project. In Week 5, we worked in small teams to create a real-world application using everything we’d learned. We followed Agile and Rapid Application Development (RAD) methodologies to quickly build prototypes and refine them based on feedback. This was my first taste of what it’s like to work in a real development environment, and it taught me how important collaboration is when creating software.
            <br>
            We also worked on database design and learned about database normalization — a key concept in making sure data is stored efficiently and can be accessed quickly.
            <br><br>
            As we moved forward, I learned about the different types of software testing — like unit testing and integration testing — which helped me understand how to make sure code works as expected before it’s released. I also learned how to apply security measures to protect applications from vulnerabilities. It was clear that building secure, reliable software is just as important as writing functional code.
            <br><br>
            Finally, I learned how to manage projects using tools like Git and Software Configuration Management (SCM), which helped me keep track of changes and deploy updates smoothly.
            <br><br>
            <h3>What I’ve Learned and How It’s Changed My Career</h3>
            <br>
            By the end of the bootcamp, I not only had the technical skills to write code and build software — I also understood the process behind it. From planning and design to testing and deployment, I gained a complete understanding of the Software Development Lifecycle (SDLC).
            <br><br>
            My journey doesn’t end here. The skills I gained in this bootcamp have opened up new opportunities in the tech industry. I’m excited to apply what I’ve learned and keep growing as a developer.
            <br>
            <br><br>
            <h3>It's Your Turn Now. (Or is it?)</h3>
            <br>
            For anyone considering getting into tech, or even just learning about Software Development to stay ahead of times, here is what a Software Development Bootcamp consists of:
            <br><br>
            Unit 1: Introduction to Software Development
            <br>
            Unit 2: Digital Processes and Services
            <br>
            Unit 3: Coding and Architecture
            <br>
            Unit 4: UI, Front-End Development and Security
            <br>
            Unit 5: Industry Project
            <br><br>
            If I can do it in 14 weeks, so can you. Ready to make a change?

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
    </div>
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
<footer>Copyright @2025 cherryontop.io</footer>

</html>