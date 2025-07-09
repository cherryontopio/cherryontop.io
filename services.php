<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : " Services";

// Define the correct path to the header file
$headerPath = __DIR__ . '/includes/header.php';

// Check if the header file exists before including it
if (file_exists($headerPath)) {
  include $headerPath;
} else {
  echo "<p style='color: red;'>Error: Header file not found!</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Smart Branding, Dynamic Websites, Scalable Products" />
  <link rel="stylesheet" href="style-pages.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/WebP" href="/assets/images/favicon.WebP" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <title>Services</title>
</head>

<body>

  <main class="main-container">
    <!-- Full-Width Title -->
    <h2 class="title-fullwidth-pages">🌟 <br> Struggling to stand out online? Let’s change that. <br> 🌟</h2>
    <p class="centered-p">Boost your digital presence with tailored solutions built for success. From conversion-driven web design and branding strategy to AI-powered digital product creation, I craft experiences that captivate, engage, and scale. Need a strategic approach to structuring content or refining your brand voice? <br>Let’s connect!</p>
    <h3 class="pages-subtitle"></h3>


    <div class="services-container">

      <?php include 'includes/services-items.php'; ?>
    </div>

    <p class="spacer"></p>

    <p class="larger-letters">
      Your <span class="highlight" data-tooltip="How your brand appears online.">digital presence</span> is more than just a <span class="highlight" data-tooltip="Your digital home.">website</span> or a <span class="highlight" data-tooltip="Your unique identity.">brand</span>—it’s the gateway to meaningful connections, lasting impressions, and real business growth.
      <br><br>

      But in a crowded online world, standing out takes more than just good design; it requires strategy, storytelling, and the right tools to bring ideas to life.
      <br><br>

      Imagine having a website that doesn’t just look beautiful but works effortlessly to guide visitors toward action, turning passive browsers into engaged clients.
      <br><br>

      Picture a personal brand so clearly defined that every word, image, and interaction builds trust and authority.
      <br><br>

      And think of the potential locked within your expertise — knowledge that, when structured into digital products like e-books or online courses, can scale beyond limits, creating impact long after the first sale.
      <br><br>

      I bring together creativity and precision to craft digital experiences that do more than exist—they thrive.
      <br><br>

      Through thoughtful design strategic messaging, and AI-powered efficiency, I help entrepreneurs and businesses transform ideas into powerful, scalable assets that drive results.
      <br><br>

      <span class="highlight" data-tooltip="Let’s shape a brand, a website, and a product that works as hard as you do."> It’s time to create something extraordinary.</span>
    </p>

    <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="large" data-theme="dark" data-type="HORIZONTAL" data-vanity="iveta-c" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://uk.linkedin.com/in/iveta-c?trk=profile-badge"></a></div>

  </main>

  <div class="subscription-divider">
    <?php include 'includes/subscription-widget.php'; ?>
  </div>






  </div>

  <div class="featured-posts">
    <h3 class="title-fullwidth">Why you should hire me</h3>

    <?php include 'includes/featured-posts.php'; ?>
  </div>




  <?php include 'includes/footer.php'; ?>


</body>

</html>