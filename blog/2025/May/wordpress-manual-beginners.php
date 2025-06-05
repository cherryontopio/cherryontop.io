
<?php 
include dirname(__DIR__, 3) . '/includes/header.php';
?>

<?php
$pageTitle = "Blog Post";


// Get the current date
$publishDate = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
</head>

<body>


  <section class="blog-section">
      <!-- Blog Main Content -->
      <main class="blog-main container">
        <!-- Full-Width Title -->
        <h2 class="post-title-fullwidth">Getting Started with WordPress</h2>

        <!-- Blog and Sidebar Wrapper -->
        <div class="content-wrapper">
          <!-- Main Blog Post -->
          <article class="blog-post">
            
            <img src="/assets/images/wordpress-logo.webp" alt="logo of WordPress.org" class="post-image" />
            <h3 class="blog-subtitle">A Beginner’s Manual</h3> 
            <!-- Insert the dynamic publish date here -->
             <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
            <p class="post-meta">
    in 
    <span class="post-categories">
        <a  href="/category/tech.php" class="post-category">tech</a>
        <a  href="/category/digital.php" class="post-category"> digital  </a>
        <a hidden href="/category/mindset.php" class="post-category"> mindset</a>
        <a hidden href="/category/stories.php" class="post-category"> stories  </a>
        <a hidden href="/category/travels.php" class="post-category"> travels</a>
        <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft  </a>
    </span>
</p>

            
            <div class="post-content">
               <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?> 
                
              <p>Welcome to the world of WordPress, where creating a website is no longer just for techies or web developers. Whether you're launching a personal blog, a business website, or an online store, WordPress offers powerful tools, a supportive community, and flexibility for users at every skill level. This guide will walk you through how to get started with WordPress in a simple, friendly, and practical way.</p>
              <h2>What Is WordPress?</h2>
              <p>
                <b>
                  
                  WordPress
                  </a>
                </b>
                is a free, open-source content management system (CMS) that allows you to build and manage a website without needing to write code. As of today, over 40% of all websites on the internet use WordPress. There are two main versions:
              </p>
              <ul>
                <li>
                    <a href="https://wordpress.org/">WordPress.org</a>
                  - Self-hosted version, ideal for full control and customization.
                </li>
                <li>
                    <a href="https://wordpress.com/">WordPress.com</a>
                  - Hosted version with built-in infrastructure, great for beginners.
                </li>
              </ul>
              <p>This guide is about <b>WordPress.org</b>, the more powerful and flexible option.</p>

              <h2>Step 1: Choose a Domain Name andd Web Hosting</h2>
              <p>Before installing WordPress, you need two things.</p>
              <h3>A Domain Name</h3>
              <p>Domain name is your website's address (e.g., www.yourname.com). You can buy it from registrars like <a href="https://www.namecheap.com/"> Namecheap</a>, <a href="https://www.godaddy.com/">GoDaddy</a>, or through your chosen hosting provider</p>
              <h3>A Web Hosting Provider</h3>
              <p>Hosting is where your website lives on the internet. Popular hosting services for WordPress include</p>
              <ul>
                <li>
                  <a href="www.bluehost.com">Bluehost</a> (official WordPress partner)
                </li>
                <li>
                  <a href="https://www.siteground.com/">SiteGround</a>
                </li>
                <li>
                  <a href="https://www.hostinger.com/">Hostinger</a>
                </li>
                <li>
                  <a href="https://www.dreamhost.com/wordpress/">DreamHost</a>
                </li>
              </ul>
              <p>Most of these offer <b>one-click WordPress installation.</b></p>
              <h2>Step 2: Install WordPress</h2>
              <p>If you're using a WordPress-recommended host like Bluehost or SiteGround, WordPress is either pre-installed or easily set up in one click.</p>
              <h3>Manual Installation:</h3>
              <ol>
                <li>
                  Download WordPress from <a href="https://wordpress.org/download/">wordpress.org/download.</a>
                </li>
                <li>
                  Upload the files to your hosting server using an FTP tool like <a href="https://filezilla-project.org/">FileZilla</a>
                </li>
                <li>
                  Create a MySQL database (via your hosting control panel).
                </li>
                <li>
                  Visit your domain and follow the on-screen instructions to complete the setup.
                </li>
              </ol>
              <div class="post-quote">
                Most users won't need to install WordPress manually, but it's helpful to understand the process.
              </div>
              <h2>Step 3: Log In to Your WordPress Dashboard</h2>
              <p>Once installed, visit:</p>
              <p><i>https://yourdomain.com/wp-admin</i></p>
              <p>Log in using your username and password. This is <i>your</i> WordPress Dashboard—where all the magic happens.</p>
              <h2>Step 4: Choose a Theme</h2>
                    <div class="post-image-container">
                <img src="/assets/images/wp-theme.webp" alt="WordPress themes" class="inpost-image">
            </div>
              <p>Your theme controls how your site looks and feels.</p>
              <ol>
                <li>
                  Go to <b>Appearance > Themes > Add New</b>.
                </li>
                <li>Browse <a href="https://wordpress.org/themes/"> free themes</a> or search by keyword.</li>
                <li>Click  <b>Install</b> and then <b>Activate</b> </li>
              </ol>
              <h3>Popular Free Themes:</h3>
              <ul>
                <li>
                  <a href="https://wordpress.org/themes/astra/">Astra</a>
                </li>
                <li>
                  <a href="https://wordpress.org/themes/oceanwp/">OceanWP</a>
                </li>
                <li>
                  <a href="https://wordpress.org/themes/neve/">Neve</a>
                </li>
              </ul>
              <div class="post-quote">
                You can also explore premium themes on sites like:
              </div>
              <ul>
                <li>
                  <a href="https://themeforest.net/category/wordpress">ThemeForest</a>
                </li>
                <li>
                  <a href="https://www.elegantthemes.com/gallery/divi/">Elegant Themes (Divi)</a>
                </li>
              </ul>
              <h2>Step 5: Install Essential Plugins</h2>
              <p><b>Plugins</b> extend WordPress functionality - like adding contact forms, SEO tools, and more</p>
              <h3>Must-Have Plugins:</h3>
              <ul>
                <li>
                  <a href="https://wordpress.org/plugins/wordpress-seo/">Yoast SEO</a> - Optimize content for search engines.
                </li>
                <li>
                  <a href="https://wordpress.org/plugins/jetpack/">Jetpack</a> - Offers security, speed, and stats.
                </li>
                <li>
                  <a href="https://wordpress.org/plugins/wpforms-lite/">WPForms</a> - Beginner-friendly contact form builder.
                </li>
                <li>
                  <a href="https://elementor.com">Elementor</a> - Drag-and-drop website builder.
                </li>
                <li>
                  <a href="https://wordpress.org/plugins/updraftplus/">UpdraftPlus</a> - Backup and restore your site.
                </li>
                <li>
                  <a href="https://wordpress.org/plugins/wordfence/">Wordfence Security</a> - Firewall and mallware scanner.
                </li>
              </ul>
              <p>To install:</p>
              <ol>
                <li>
                  Go to <b>Plugins > Add New</b>.
                </li>
                <li>
                  Search for the plugin.
                </li>
                <li>
                  Click <b>Install Now</b>, then <b>Activate</b>.
                </li>
              </ol>
              <h2>Step 6: Create Your First Pages and Posts</h2>
              
              <div class="post-image-container">
                <img src="/assets/images/wp-pages.webp" alt="WordPress pages in dashboard" class="inpost-image">
            </div>
              
              <h3>Pages:</h3>
              <p>For static content like <b>Home, About, Contact</b>. </p>
              <ol>
                <li>
                  Go to <b>Pages > Add New</b>
                </li>
                <li>
                  Use the block editor to add text, images, etc.
                </li>
                <li>
                  Click <b>Publish</b>
                </li>
              </ol>
              <h3>
                Posts
              </h3>
              <p>For blog content or updates</p>
              <ol>
                <li>
                  Go to  <b>Posts > Add New</b>
                </li>
                <li>
                  Add your content, set categories and tags
                </li>
                <li>
                  Click <b>Publish</b>
                </li>
              </ol>
              <p>
                Explore the <b>Gutenberg block editor</b> to create rich content easily using blocks for headings, images, videos, buttons, andd more.
              </p>
              <h2>Step 7: Customize Your Site</h2>
              <p>Go to <b>Appearance > Customize</b> to:</p>
              <ul>
                <li>
                  Upload a logo or site icon (favicon)
                </li>
                <li>
                  Change fonts, colors, layout
                </li>
                <li>
                  Set homepage display (latest posts or static page)
                </li>
                <li>
                  Add widgets
                </li>
                <li>
                  Manage menus
                </li>
              </ul>
              <p>
                All changes are previewed live before saving.
              </p>
              <h2>
                Step 8: Configure Basic Settings
                                    <div class="post-image-container">
                <img src="/assets/images/wp-settings.webp" alt="WordPress settings" class="inpost-image">
            </div>
              </h2>
              <h3>
                Head to <b>Settings</b> and update:
              </h3>
              <ul>
                <li>
                  <b>
                    General:
                  </b>
                  Site title, tagline, email
                </li>
                <li>
                  <b>Reading:</b> Choose homepage settins
                </li>
                <li>
                  <b>
                    Permalinks:
                  </b>
                  Select "Post name" for SEO-friendly URLs
                </li>
                <li>
                  <b>
                    Discussion: 
                  </b>
                  Control comments and notifications
                </li>
              </ul>
              <h3>Example:</h3>
              <p>To make your homepage a static page: </p>
              <ul>
                <li>
                  Go to <b>Settings > Reading</b>
                </li>
                <li>
                  Set "Homepage Displays" to "A static page"
                </li>
                <li>
                  Select your homepage and blog page
                </li>
              </ul>
              <h2>Step 9: Launch Your Website</h2>
              <p>Before going live:</p>
              <ul>
                <li>Test your site on desktop and mobile</li>
                <li>Check all links and forms</li>
                <li>Proofread your content</li>
                <li>Install <a href="https://wordpress.org/plugins/google-site-kit/">Google Site Kit</a> to connect Analytics and Search Console</li>
              </ul>
              <div class="post-quote">
                You're ready to share your site with the world - congratulations!
              </div>
              <h2>Bonus Advice: Grow and Manage Your Site</h2>
              <p>Once your site is live, here's what to focus on next:</p>
              <h3>Learn More WordPress Skills</h3>
              <ul>
                <li>Visit the <a href="https://wordpress.org/support/">WordPress Support Forums</a></li>
                <li>
                  Follow the <a href="https://learn.wordpress.org/">WordPress Learn portal</a> for tutorials and workshops
                </li>
              </ul>
              <h3>Optimize for SEO</h3>
              <ul>
                <li>
                  Use <a href="https://yoast.com/">Yoast SEO</a> or <a href="https://rankmath.com/">Rank Math</a> for advanced SEO tools
                </li>
                <li>
                  Submit your site to <a href="https://search.google.com/search-console/">Google Search Console</a>
                </li>
              </ul>
              <h3>Add eCommerce</h3>
              <ul>
                <li>
                  Use <a href="https://woocommerce.com/">WooCommerce</a> to create and online store
                </li>
              </ul>


              <!-- Add more content here -->
            </div>
            <div>
          </div>
          <br>
          
          <div class="donate-link">
          Do you want to support me on my journey? <a href="https://www.paypal.com/donate/?hosted_button_id=FPLATGZCMZ2US" target="_blank">
  <button class="donate-button">Buy me a coffee!</button>
</a>
</div>
<br>
  
</article>
          

            <!-- Sidebar Section -->
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/blog/sidebar.php"; ?>
        </div>
        
     <!-- FEATURED ITEMS SECTION -->

     <?php include dirname(__DIR__, 3) . '/includes/featured-index-items.php'; ?>

<!-- FEATURED ITEMS END -->


      </main>
 
  </section>
  <?php 
$footerPath = dirname(__DIR__, 3) . '/includes/footer.php';
if (file_exists($footerPath)) {
    include $footerPath;
} else {
    echo "<p style='color: red;'>Error: Footer file not found!</p>";
}
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>