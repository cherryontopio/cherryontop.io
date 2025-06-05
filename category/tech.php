<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "Posts in Category Coding";

// Define the correct path to the header file
$headerPath = $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

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
 
  
  <title>Coding and Tech</title>
</head>
<body>
  <!-- Hero Section with Background Image -->
  <div class="hero-category-tech">
    <div class="hero-content">
      <h1 class="title">Tech</h1>
      <p class="subtitle">Exploring AI, Software & Code</p>
      
      <div hidden class="search-bar">
        <input type="text" id="search-input" placeholder="Insert search text">
        <button id="search-button">Search</button>
      </div>
    </div> <!-- end .hero-content -->
  </div> <!-- end .hero-category-coding -->

  <!-- Main Section with Posts and Tags -->
  <section class="categories">
    <?php include '../includes/post-card-tech.php'; ?>
    <?php include '../includes/featured-index-items.php'; ?>
    <div class="paypal-categories">
    <?php include '../includes/paypal.php'; ?>
    </div>

    

    <!-- Spacer (Optional) -->
    
  </section>

  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>

 
</body>
</html>
