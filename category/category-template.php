<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "Posts in Category ";

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
  <div class="hero-category-coding">
    <div class="hero-content">
      <h1 class="title">Category Template</h1>
      <p class="subtitle">Category Template</p>
      
      <div class="search-bar">
        <input type="text" id="search-input" placeholder="Insert search text">
        <button id="search-button">Search</button>
      </div>
    </div> <!-- end .hero-content -->
  </div> <!-- end .hero-category-coding -->

  <!-- Main Section with Posts and Tags -->
  <section class="categories">
    <?php include '../includes/post-card-stories.php'; ?>
    <?php include '../includes/featured-index-items.php'; ?>
    <?php include '../includes/categories.php'; ?>

    

    <!-- Spacer (Optional) -->
    
  </section>

  <!-- Footer -->
  <?php include '../includes/footer.php'; ?>


</body>
</html>
