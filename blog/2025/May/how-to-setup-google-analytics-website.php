<?php
$publishDate = '2025-05-18';  // <-- Actual post publish date here
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
      <h2 class="post-title-fullwidth">How to Set Up Google Analytics on Your Website</h2>

      <!-- Blog and Sidebar Wrapper -->
      <div class="content-wrapper">
        <!-- Main Blog Post -->
        <article class="blog-post">

          <img src="/assets/images/Google-Analytics.webp" alt="Google Analytics graphs" class="post-image" />
          <h3 class="blog-subtitle">A Step-by-Step Guide</h3>
          <!-- Insert the dynamic publish date here -->
          <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
          <p class="post-meta">
            in
            <span class="post-categories">
              <a href="/category/tech.php" class="post-category">tech</a>
              <a href="/category/digital.php" class="post-category"> digital </a>
              <a hidden href="/category/mindset.php" class="post-category"> mindset</a>
              <a hidden href="/category/stories.php" class="post-category"> stories </a>
              <a hidden href="/category/travels.php" class="post-category"> travels</a>
              <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft </a>
            </span>
          </p>


          <div class="post-content">
            <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?>

            <p>Google Analytics is a powerful, free tool that helps you understand how visitors interact with your website. By setting it up correctly, you can gain insights into user behavior, track conversions, and make data-driven decisions to improve your online presence</p>
            <p>
              In this guide, I'll walk you through the process of setting up Google Analytics on your website using Google Analytics 4 (GA4), the latest version of the platform.
            </p>
            <h2>
              Step 1: Create a Google Analytics Account
            </h2>
            <ol>
              <li>
                Visit the <a href="https://analytics.google.com/">Google Analytics website</a> and sign in with your Google account.
              </li>
              <li>
                Enter your account name and configure the data sharing settings according to your preferences.
              </li>
              <li>
                Click "Next" to proceed.
              </li>
            </ol>
            <h2>
              Step 2: Set Up a Property
            </h2>
            <ol>
              <li>
                Enter a property name (e.g., your website's name). In my case, this is my domain name cherryontop.io.
              </li>
              <li>
                Select your reporting time zone and currency.
              </li>
              <li>
                Click "Next" to continue.
              </li>
            </ol>
            <h2>Step 3: Configure a Data Stream</h2>
            <ol>
              <li>
                Choose "Web" as your platform.
              </li>
              <li>
                Enter your website's URL and a stream name.
              </li>
              <li>
                Ensure that Enhanced Measurement is enabled to automatically track interactions like page views, scrolls, and clicks.
              </li>
              <li>
                Click "Create stream" to finalize.
              </li>
            </ol>
            <h2>Step 4: Obtain Your Measurement ID</h2>
            <ol>
              <li>
                In the "Web stream details" section, locate your Measurement ID (formatted as "G-XXXXXXXXXX").
              </li>
              <li>
                Click on "Global site tag (gtag.js)" to view the tracking code.
              </li>
              <li>
                Copy the entire code snippet provided.
              </li>
            </ol>
            <h2>Step 5: Add the Tracking Code to Your Website</h2>
            <h3>Option 1: Manually Insert the Code</h3>
            <ol>
              <li>
                Open your website's HTML files.
              </li>
              <li>
                Locate the opening

                <head> tag in your site's template or main HTML file.
              </li>
              <li>
                Paste the copied tracking code immediately after the opening

                <head> tag.
              </li>
              <li>
                Save and upload the changes to your web server.
              </li>
            </ol>
            <h3>Option 2: Use Google Tag Manager</h3>
            <ol>
              <li>
                Sign in to your <a href="https://tagmanager.google.com/">Google Tag Manager</a> account.
              </li>
              <li>
                Create a new tag:
                <ul>
                  <li>
                    Choose "Tag Configuration" > "Google Analytics: GA4 Configuration".
                  </li>
                  <li>
                    Enter your Measurement ID.
                  </li>
                </ul>
              </li>
              <li>
                Set the trigger to "All Pages".
              </li>
              <li>
                Save and publish the tag.
              </li>
            </ol>
            <h2>Step 6: Verify the Installation</h2>
            <ol>
              <li>
                Go back to your Google Analytics account.
              </li>
              <li>
                Navigate to "Real-time" reports.
              </li>
              <li>
                Visit your website in a new browser tab.
              </li>
              <li>
                Check if your visit appears in the real-time report, confirming that data is being collected.
              </li>

            </ol>
            <h2>Step 7: Set Up Goals and Conversions</h2>
            <ol>
              <li>
                In Google Analytics, go to Admin > Goals.
              </li>
              <li>
                Click "New Goal" and select a template or create a custom goal.
              </li>
              <li>
                Define your goal type (e.g., destination, duration, pages per session, or event), then set the conditions and values that determine goal completion.
              </li>
            </ol>
            <h2>Step 8: Link Google Analytics with Google Search Console (Optional)</h2>
            <ol>
              <li>
                In the Admin section, select Property Settings.
              </li>
              <li>
                Click on Adjust Search Console.
              </li>
              <li>
                Click Add, then follow the steps to link your Analytics property to your Search Console account.
              </li>
            </ol>
            <h2>Step 9: Set Up Custom Dashboards (Optional)</h2>
            <ol>
              <li>
                Go to the Customization tab and click Dashboards.
              </li>
              <li>
                Create a New Dashboard and choose the metrics (e.g., page views, bounce rate, conversions) that you want to monitor.
              </li>
            </ol>

            <h3>Conclusion</h3>
            <p>
              By following these steps, you can successfully set up Google Analytics on your website and begin tracking valuable data about your visitors. Regularly reviewing this data will help you make informed decisions to enhance your website's performance and user experience.

              If you need further assistance or have questions about advanced features like event tracking or integrating with other Google services, feel free to ask!
            </p>


            <!-- Add more content here -->
          </div>
          <div>
          </div>
          <br>
          <div class="divider"></div>
          <div class="donate-link">
            Do you want to support me on my journey? <a href="https://www.paypal.com/donate/?hosted_button_id=FPLATGZCMZ2US" target="_blank">
              <button class="donate-button">Buy me a coffee!</button>
            </a>
          </div>

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