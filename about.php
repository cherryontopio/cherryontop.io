
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
    <title><?php echo $pageTitle; ?></title>
</head>

<body>
<!-- about.php -->

        <!-- Main Content -->
        <main class="main-container">
            <!-- Full-Width Title -->
            <h2 class="title-fullwidth">About Me</h2>
            <h3 hidden class="pages-subtitle"></h3>

            <div class="content-container">
                <p>I'm a UX writer and multilingual localization specialist with a background in technical translation (EN/DE/CZ), a love for clear instructions, and a strong interest in AI, digital products, and web development.</p>
                <p>After years translating complex technical documentation—especially in the automotive industry—I shifted into UX and product writing. I’ve worked on onboarding flows, in-app copy, and chatbot scripts, with a passion for making digital experiences intuitive, inclusive, and human-centered.</p>
                <p>I recently upskilled through a software engineering bootcamp, where I deepened my technical foundation and learned to write code. Today, I also build websites as a web developer—from custom WordPress builds to hand-coded projects—and continue expanding my tech toolkit with tools like Figma, AI prompt design, and localization platforms.</p>
                <p>I bring cross-cultural fluency, technical accuracy, and UX best practices into every word I write—and every product I help create.</p>
            </div>  
        </main>

    <div class="subscription-divider">
  <?php include 'includes/subscription-widget.php'; ?>
  </div>  
  <div class="social-share-divider">
  <?php include 'includes/social-share-pages.php'; ?>
    </div>
    <div class="spacer"></div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
