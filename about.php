<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "About";

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
        <h2 class="title-fullwidth-pages">About Me</h2>
        <h3 hidden class="pages-subtitle"></h3>

        <div class="content-container">
            <section id="about">

                <p class="larger-letters">
                    I specialize in strategic branding, powerful websites, and scalable digital products, helping businesses transform their online presence into high-impact, conversion-driven experiences.
                    With a keen eye for design, user experience, and storytelling, I craft websites that don’t just look great—they function seamlessly to guide visitors toward action, building trust and engagement along the way.
                </p>
                <br><br>
                <p class="larger-letters">
                    Your brand is more than just a logo—it’s the essence of your business, the story you tell, and the way people remember you.
                    I refine brand messaging to elevate authority, attract ideal clients, and enhance engagement, ensuring every piece of content aligns with your unique identity and business goals.
                    Whether structuring e-books, courses, or digital assets, I help craft content that is optimized for scalability, impact, and long-term success.
                </p>
                <br><br>
                <p class="larger-letters">
                    My approach blends creativity and precision, combining AI-powered tools with human-driven strategy to streamline workflows, optimize design, and accelerate growth.
                    Every website, branding project, and digital product I create is designed to be functional, visually compelling, and strategically positioned for success.
                    If you're ready to build a brand and digital presence that stands out, <a href="/contact.php">let’s bring your ideas to life!</a>
                </p>


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