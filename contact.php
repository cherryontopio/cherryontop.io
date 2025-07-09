<?php
// Set the page title dynamically based on the current script name
$pageTitle = basename(__FILE__, '.php') === 'index' ? "Welcome to My Website" : "Contact";

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
    <!-- Contact.php -->

    <!-- Main Content -->
    <main class="main-container-contact">
        <!-- Full-Width Title -->
        <h2 class="title-fullwidth-pages">Contact</h2>
        <h3 class="blog-subtitle"></h3>

        <div class="content-container">
            <?php include 'includes/contact-form.php'; ?>

        </div>




    </main>
    <div class="linkedin-divider">
        <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="large" data-theme="dark" data-type="HORIZONTAL" data-vanity="yvett-c" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://uk.linkedin.com/in/yvett-c?trk=profile-badge"></a></div>
    </div>
    <?php
    if (file_exists('includes/contact-whatsapp.php')) {
        include 'includes/contact-whatsapp.php';
    } else {
        echo "<p style='color: red;'>Error: Contact file not found!</p>";
    }
    ?>


    <?php include 'includes/footer.php'; ?>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
</body>

</html>