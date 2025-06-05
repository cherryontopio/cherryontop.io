
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
        <h2 class="post-title-fullwidth">LinkedIn Won't Verify Me - Please Trust That I'm Real 😏</h2>

        <!-- Blog and Sidebar Wrapper -->
        <div class="content-wrapper">
          <!-- Main Blog Post -->
          <article class="blog-post">
            
            <img src="/assets/images/linkedin-verification.webp" alt="message from LinkedIn: The issuing country isn't supported for verifiations." class="post-image" />
            <h3 class="blog-subtitle">A Frustrating Tale of Glitches and Silence</h3> 
            <!-- Insert the dynamic publish date here -->
             <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
            <p class="post-meta">
    in 
    <span class="post-categories">
        <a  href="/category/tech.php" class="post-category">tech</a>
        <a  href="/category/digital.php" class="post-category"> digital  </a>
        <a hidden href ="/category/mindset.php" class="post-category"> mindset</a>
        <a hidden href="/category/stories.php" class="post-category"> stories  </a>
        <a hidden href="/category/travels.php" class="post-category"> travels</a>
        <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft  </a>
    </span>
</p>

            
            <div class="post-content">
               <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?> 
                <p>
We live increasingly virtually, in the digital — and in this interconnected world, verification on professional platforms like LinkedIn should be seamless, secure, and inclusive. Unfortunately, that has not been my experience. What started as a simple change of email spiraled into a maze of platform bugs, unresponsive systems, and an ultimately failed identity verification process that left me asking:</p>
<h3 style="text-align: center;">What’s going on at LinkedIn?</h3>
<div class="divider"></div>

<h3>The Email Switch That Went Nowhere</h3>

<p>
My journey began with a straightforward task: updating my primary email address on LinkedIn. I added the new address in settings, verified it, and set it as the primary email. But when I checked my public profile — nothing had changed.
</p>

<p>
To make matters worse, when I tried to log in with the new email, LinkedIn didn’t recognize it. Yet, when I attempted to assign the same email again, the system told me it was already in use. So LinkedIn clearly acknowledges this email — enough to send me promotional content — but I can’t use it to log into my account.
</p>

<h3>Trying to Outrun the Bug: Account Merge</h3>

<p>
After weeks of back-and-forth with no resolution, I gave up and created a new LinkedIn account with a completely different email. My goal? To merge my old and new accounts and start fresh. This part, surprisingly, worked. My accounts were successfully merged, and I could finally use my desired email to log in.
</p>

<p>
But then came the next hurdle: identity verification.
</p>

<h3>The Persona Loops of Identity Verification</h3>

<p>
After merging my accounts, LinkedIn urged me to verify my identity. I followed the instructions from their email, which led me to a platform called <strong>PERSONA</strong> — not the <strong>CLEAR</strong> platform mentioned in their official documentation.
</p>

<ol>
  <li>Scan my face — left and right.</li>
  <li>Scan the front and back of my government-issued ID.</li>
</ol>

<p>
I completed the process. Nothing happened. I tried again. Still nothing. A third time — same result.
</p>

<h3>A Verification Badge That Never Arrives</h3>

<p>
After these failed attempts, I reached back out to LinkedIn. Their response was an automated message with instructions — again — to use the CLEAR platform. But the verification button on my profile still took me to PERSONA.
</p>

<p>
This time, PERSONA asked me to scan only my ID. I did, only to be met with a baffling error: <em>“The issuing country isn't supported for verifications.”</em></p> 
<p>I am an EU national living in the UK. Settled Status and all. I can use my ID for ...
  <ol><strong> 
    <li>
unlimited travel within the EU, and
    </li>
    <li>
to travel in and out of the UK (until at least 31 December 2025).
    </li>
    </strong> 
  </ol>
  <p>... but apparently cannot use it to verify my identity on LinkedIn? 
</p>

<h3>So Let Me Get This Straight...</h3>

<ul>
  <li>LinkedIn's system recognizes and stores my new email — but doesn’t display it in my Settings.</li>
  <li>They instruct users to verify through CLEAR — but send us to PERSONA instead.</li>
  <li>Then, PERSONA excludes entire countries from the verification process.</li>
</ul>

<p>
Meanwhile, my profile remains without the verification badge, despite multiple attempts, multiple scans of sensitive ID data, and numerous automated replies.
</p>

<h3>Authenticity Shouldn’t Be This Hard</h3>

<p>
LinkedIn says, “Authenticity is key to creating meaningful interactions.” If that's the case, the platform itself must also demonstrate authenticity — in its user experience, in its technical reliability, and in its support systems.
</p>

<p>
Until then, the only thing LinkedIn seems to verify is how difficult it can be to get verified.
</p>

              <img src="/assets/images/" alt="" class="inpost-image">

              
              <!-- Add more content here -->
            </div>
            <div>
          </div>
          <br>
          <div class="divider"></div>
          <div class="donate-link">
          <?php include dirname(__DIR__, 3) . '/includes/paypal.php'; ?>
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