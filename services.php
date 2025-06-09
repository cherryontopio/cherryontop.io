<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "Our Services";

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
  <meta name="description" content="Travel adventures of a tech writer, exploring storytelling and life experiences through the lens of technology and travel." />
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

    <p class="centered-p">
      Your <span class="highlight" data-tooltip="Digital presence refers to how your brand appears across online platforms, including websites, social media, and search engines.">digital presence</span> is more than just a <span class="highlight" data-tooltip="A website is a structured collection of digital pages that serve as a business or personal hub for information, services, or commerce.">website</span> or a <span class="highlight" data-tooltip="A brand is the unique identity of a business, consisting of its messaging, visuals, and values.">brand</span>—it’s the gateway to <span class="highlight" data-tooltip="Meaningful connections refer to customer relationships built through trust, engagement, and value-driven interaction.">meaningful connections</span>, <span class="highlight" data-tooltip="Lasting impressions are the memorable aspects of your brand that keep people coming back.">lasting impressions</span>, and <span class="highlight" data-tooltip="Business growth includes increased revenue, audience reach, and market influence.">real business growth</span>.
      <br><br>

      But in a crowded online world, <span class="highlight" data-tooltip="Standing out refers to differentiating your brand from competitors through unique visuals, messaging, and strategy.">standing out</span> takes more than just <span class="highlight" data-tooltip="Good design integrates aesthetics and functionality to create a seamless digital experience.">good design</span>; it requires <span class="highlight" data-tooltip="Strategy is a structured approach to achieving business goals through planning and execution.">strategy</span>, <span class="highlight" data-tooltip="Storytelling in branding is the art of conveying a compelling narrative that resonates with audiences.">storytelling</span>, and <span class="highlight" data-tooltip="The right tools include platforms, frameworks, and technologies that help optimize digital presence.">the right tools</span> to bring ideas to life.
      <br><br>

      Imagine having a <span class="highlight" data-tooltip="An optimized website ensures user-friendly design, fast loading times, and seamless navigation.">website</span> that doesn’t just look <span class="highlight" data-tooltip="A visually pleasing website should also be functionally strong, guiding visitors toward desired actions.">beautiful</span> but works <span class="highlight" data-tooltip="Effortless navigation means intuitive design that leads users to engage with content or services without confusion.">effortlessly</span> to guide visitors toward action, turning <span class="highlight" data-tooltip="Engaged clients are those who interact with your brand, whether through purchases, subscriptions, or inquiries.">passive browsers into engaged clients</span>.
      <br><br>

      Picture a <span class="highlight" data-tooltip="Personal branding is crafting a distinct online identity that reflects expertise and personality.">personal brand</span> so clearly defined that every <span class="highlight" data-tooltip="Your brand’s messaging consists of written, visual, and interactive elements that convey your mission.">word, image, and interaction</span> builds <span class="highlight" data-tooltip="Trust and authority are established through consistency, expertise, and genuine engagement.">trust and authority</span>.
      <br><br>

      And think of the <span class="highlight" data-tooltip="Your potential refers to untapped opportunities for growth and influence in your industry.">potential</span> locked within your <span class="highlight" data-tooltip="Expertise consists of specialized knowledge, skills, and experience in a given industry.">expertise</span>—knowledge that, when <span class="highlight" data-tooltip="Digital products like e-books and courses allow businesses to package knowledge into scalable content.">structured into digital products</span> like <span class="highlight" data-tooltip="An e-book is a downloadable publication designed to inform, educate, or entertain.">e-books</span> or <span class="highlight" data-tooltip="An online course is a structured educational program accessible through digital platforms.">online courses</span>, can <span class="highlight" data-tooltip="Scaling beyond limits means expanding reach and revenue opportunities without geographical restrictions.">scale beyond limits</span>, creating <span class="highlight" data-tooltip="Impact refers to measurable influence, engagement, and results generated by digital products.">impact</span> long after the first sale.
      <br><br>

      I bring together <span class="highlight" data-tooltip="Creativity fuels innovation, while precision ensures accuracy in execution.">creativity and precision</span> to craft <span class="highlight" data-tooltip="Digital experiences include websites, branding, and content that engage users and drive conversions.">digital experiences</span> that do more than exist—they <span class="highlight" data-tooltip="Thrive means sustaining success through ongoing optimization and engagement.">thrive</span>.
      <br><br>

      Through <span class="highlight" data-tooltip="Thoughtful design integrates aesthetics, usability, and brand consistency.">thoughtful design</span>, <span class="highlight" data-tooltip="Strategic messaging aligns branding and marketing to create a cohesive customer journey.">strategic messaging</span>, and <span class="highlight" data-tooltip="AI-powered efficiency automates processes, optimizes content, and enhances user engagement.">AI-powered efficiency</span>, I help <span class="highlight" data-tooltip="Entrepreneurs and businesses benefit from tailored solutions that address growth challenges.">entrepreneurs and businesses</span> transform ideas into <span class="highlight" data-tooltip="Scalable assets are digital products that generate long-term value with minimal ongoing effort.">powerful, scalable assets</span> that <span class="highlight" data-tooltip="Driving results means achieving conversions, customer engagement, and brand recognition.">drive results</span>.
      <br><br>

      <span class="highlight" data-tooltip="Extraordinary digital presence ensures lasting influence and success in your industry.">It’s time to create something extraordinary.</span>
    </p>
    <br><br><br><br>
    <h3 class="pages-subtitle"><em>"Let’s shape a brand, a website, and a product that works as hard as you do."</h3>





  </main>

  <div class="subscription-divider">
    <?php include 'includes/subscription-widget.php'; ?>
  </div>
  <div class="featured-posts">
    <h3 class="title-fullwidth">Why you should hire me</h3>
    <?php include 'includes/featured-posts.php'; ?>
  </div>

  <?php include 'includes/footer.php'; ?>


</body>

</html>