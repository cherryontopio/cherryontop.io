
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
            <h2 class="title-fullwidth">How I can help you</h2>
            <h3 class="pages-subtitle"></h3>
            <p class="centered-p">Boost your digital presence with tailored solutions that fit your needs. From easy-to-use website design and smooth maintenance to social media management that grows your brand, these services are built for success. Need clear technical writing or accurate translations in English, German, and Czech? <br>Get in touch!</p>

            <div class="services-container">

                <?php include 'includes/services-items.php'; ?>
            </div>
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
