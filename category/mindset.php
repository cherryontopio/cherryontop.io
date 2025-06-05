<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "Posts in Category Freelance and Business";

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
  
  
  <title>Mindset</title>
</head>
<body>
  <!-- Hero Section with Background Image -->
  <div class="hero-category-mindset">
    <div class="hero-content">
      <h1 class="title">Mindset</h1>
      <p class="subtitle">The Power of Thought</p>
      
      <div hidden class="search-bar">
        <input type="text" id="search-input" placeholder="Insert search text">
        <button id="search-button">Search</button>
      </div>
    </div> <!-- end .hero-content -->
  </div> <!-- end .hero-category-coding -->

  <!-- Main Section with Posts and Tags -->
  <section class="categories">
  <div class="hidden">
  <?php include '../includes/oops-no-posts.php'; ?>
    </div>
    <?php include '../includes/post-card-mindset.php'; ?>

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
