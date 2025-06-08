<<<<<<< HEAD
<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "Thank you!";

// Define the correct path to the header file
$headerPath = __DIR__ . '/includes/header.php';

// Check if the header file exists before including it
if (file_exists($headerPath)) {
    include $headerPath;
} else {
    echo "<p style='color: red;'>Error: Header file not found!</p>";
}
?>
<!-- thank-you.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You</title>
</head>
<body>
  <!-- thank you.php -->
    <!-- Hero Section with Navigation -->
    
      <section>
      <!-- Main Content -->
          <main class="main-container">
            <!-- Full-Width Title -->
            <h2 class="title-fullwidth">Thank You!</h2>
            

<?php include 'includes/contact-info.php'; ?>
      

      <?php include 'includes/subscription-widget.php'; ?>
      </main>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>

</body>
=======
<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "Thank you!";

// Define the correct path to the header file
$headerPath = __DIR__ . '/includes/header.php';

// Check if the header file exists before including it
if (file_exists($headerPath)) {
    include $headerPath;
} else {
    echo "<p style='color: red;'>Error: Header file not found!</p>";
}
?>
<!-- thank-you.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You</title>
</head>
<body>
  <!-- thank you.php -->
    <!-- Hero Section with Navigation -->
    
      <section>
      <!-- Main Content -->
          <main class="main-container">
            <!-- Full-Width Title -->
            <h2 class="title-fullwidth">Thank You!</h2>
            

<?php include 'includes/contact-info.php'; ?>
      

      <?php include 'includes/subscription-widget.php'; ?>
      </main>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>

</body>
>>>>>>> ebd17caa9067079db1a549ccbfdbb39b86afde78
</html>