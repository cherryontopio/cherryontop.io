<?php
$navLinks = [
  ['label' => 'Home', 'href' => '/'],
  ['label' => 'Services', 'href' => '/services'],
  ['label' => 'Contact', 'href' => '/contact'],
  ['label' => 'About', 'href' => '/about'],
];


// Get the current URL path (e.g., "/about.php")
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Travel adventures of a tech writer, exploring storytelling and life experiences through the lens of technology and travel." />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/header.css" />
    <link rel="stylesheet" href="/assets/css/footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/webp" href="/assets/images/favicon.webp" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">

    <title>cherryontop.io - Smart Branding, Dynamic Websites, Scalable Products</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7PGB0DRX2H"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag("js", new Date());
      gtag("config", "G-7PGB0DRX2H");
    </script>
</head>
<body>
<header>
  <nav class="navbar">
    <a href="/index.php">
      <div class="logo-title">
        <div class="navbar-logo">
          <img class="logo" src="https://cherryontop.io/assets/images/favicon.webp" alt="Cherry on Top Logo" loading="lazy">
        </div>
        <div class="navbar-title">
          <span class="brand-title">on top .io</span>
        </div>
      </div>
    </a>
    
    <!-- Hamburger Menu (Hidden on larger screens, shown on small screens) -->
    <div class="hamburger" onclick="toggleMenu()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>

    <!-- Navigation Links on the Right -->
    <div class="navbar-links">
      <ul>';
foreach ($navLinks as $link) {
  $isActive = ($link["href"] === $currentPath) ? " class=\"active\"" : "";
  echo '<li><a href="' . $link["href"] . '"' . $isActive . '>' . $link["label"] . '</a></li>';
}
echo '
      </ul>
    </div>
  </nav>
</header>

<!-- ✨ Tagline section -->
<section class="site-tagline" ><h2>Smart Branding, Dynamic Websites <br>& Scalable Products.</h2>
    <p></p>
</section>
';
