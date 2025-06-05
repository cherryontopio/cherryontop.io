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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Travel adventures of a tech writer, exploring storytelling and life experiences through the lens of technology and travel." />
    <link rel="icon" type="image/WebP" href="../assets/images/favicon.WebP" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
</head>

<body>
    <section class="front-page-body">
        <div class="hero">
            <div class="hero-content">
                <h1 class="title">Tales by an Ol' CoderCat:</h1>
                <p class="subtitle">Cherry-Picked and Bug-Free</p>
                <div hidden class="search-bar">s
                    <input type="text" id="search-input" placeholder="Insert search text" />
                    <button id="search-button">Search</button>
                </div>
            </div>
        </div>

        <section>
            <div class="front-page-content">
                <div class="front-sections-headings">
                    <h1>Categories</h1>
                </div>
                <?php include 'includes/categories.php'; ?>

                <div class="front-sections-headings">
                    <h1>Latest Posts</h1>
                </div>
                <?php include 'includes/latest-posts.php'; ?>

                <div class="front-sections-headings">
                    <h1>Featured Posts</h1>
                </div>
                <?php include 'includes/featured-index-items.php'; ?>

                <div class="subscription-divider">
                    <?php include 'includes/subscription-widget.php'; ?>
                </div>

                <div class="social-share-divider">
                    <?php include 'includes/social-share-pages.php'; ?>
                </div>
            </div>
        </section>

        <?php include 'includes/footer.php'; ?>
    </section>
</body>

</html>