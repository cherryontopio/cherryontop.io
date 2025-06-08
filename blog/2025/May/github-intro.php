<?php
$pageTitle = "GitHub - The Dev's Crib";
$publishDate = '2025-05-28';
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

          <img src="/assets/images/github-logo.webp" alt="GitHub logo" class="post-image" />
          <h3 class="blog-subtitle">and Why Should You Use It?</h3>
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

            <p>Have you ever wondered how software developers work together on the same project without messing up each other’s code? Or how they keep track of every change they make so nothing gets lost? The answer to both questions is usually GitHub.</p>
            <p>
              If you’re just starting out in coding or curious about how software teams collaborate, GitHub is one of the most important tools you’ll want to understand. But what exactly is it, and why is it so popular? Let’s break it down.
            </p>
            <h2>
              What Exactly Is GitHub?
            </h2>
            <p>
              GitHub is a website where developers store their code online. But it’s not just a place to keep files — it’s built around a system called Git, which helps track every change made to the code over time. This means you can see what was changed, when, and by whom.
            </p>
            <p>
              Imagine you’re writing a story with friends. GitHub is like a shared notebook that keeps every version of your story, lets everyone add their parts without erasing others, and lets you go back if something doesn’t work out.
            </p>
            <h2>
              How Does GitHub Work?
            </h2>
            <p>
              At the heart of GitHub are a few simple concepts:
            </p>
            <ul>
              <li>
                <b>Repositories (Repos):</b> These are like folders for your projects. They hold all your code, documents, and the history of your work.
              </li>
              <li>
                <b>Branches: </b> Think of branches as separate lanes where you can try new ideas or fix problems without changing the main project.
              </li>
              <li>
                <b>Pull Requests:</b> When you’re ready to add your changes back to the main project, you open a pull request. It’s a way to review, discuss, and approve the updates before they become official.
              </li>
              <li>
                <b>Issues: </b> These help teams keep track of bugs, tasks, or new features that need attention.
              </li>
              <li>
                <b>Actions:</b> This feature automates repetitive tasks like testing your code or deploying it online.
              </li>
            </ul>
            <h2>Why Do Developers Love GitHub?</h2>
            <p>GitHub makes working together easy. Here's why it's a favorite among programmers:
            </p>
            <ul>
              <li>
                <b>You always have a backup:</b> Every change is saved, so you never lose your work.
              </li>
              <li>
                <b>Teamwork made simple:</b> Multiple people can work on different parts of a project without stepping on each other's toes.
              </li>
              <li>
                <b>Open source everywhere:</b> GitHub hosts millions of open source projects, where anyone can contribute or learn from real-world code.
              </li>
              <li>
                <b>Build your reputation:</b> Sharing your projects on GitHub is a great way to show your skills to potential employers or collaborators.
              </li>
              <li>
                <b>Automation:</b> You can set up automatic tests and deployments, saving time and avoiding mistakes.
              </li>
            </ul>
            <h2>Who Uses GitHub?</h2>
            <p>From individuals who consider coding just as a hobby and are building small apps to huge companies managing complex software, GitHub is used by millions of users worldwide. It's a hub where ideas grow, problems get solved, and software comes to life.</p>
            <h2>How to Get Started?</h2>
            <p>If this sounds interesting, creating a free GitHub account is your first step. You can start your own projects, explore code from others, and even contribute to open source. There are plenty of guides and tutorials to help you get started.</p>
            <p>Are you ready to start your GitHub journey?</p>
            <img src="/assets/images/" alt="" class="inpost-image">


            <!-- Add more content here -->
          </div>
          <div>
          </div>
          <br>
          <div class="divider"></div>
          <div class="donate-link">
            <?php include dirname(__DIR__, 3) . '/includes/paypal.php'; ?>
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