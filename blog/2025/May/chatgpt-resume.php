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
  <section>
      <!-- Blog Main Content -->
      <main class="blog-main container">
        <!-- Full-Width Title -->
        <h2 class="post-title-fullwidth">How chatGPT Helped Me Improve My CV</h2>

        <!-- Blog and Sidebar Wrapper -->
        <div class="content-wrapper">
          <!-- Main Blog Post -->
          <article class="blog-post">
            
            <img src="/assets/images/chatgpt.webp" alt="chatgpt open ai" class="post-image" />
            <h3 class="blog-subtitle">Learning to Showcase My Skills With AI</h3>
            <p class="post-meta">Published on <?php echo date('F j, Y', strtotime($publishDate)); ?> • by <img class="cherry-icon" src="/assets/images/favicon.webp" style="height: 20px; vertical-align: middle;" alt="icon" alt="a cherry"></p>
            <p class="post-meta">
              in 
    <span class="post-categories">
        <a  href="/category/tech.php" class="post-category">tech</a>
        <a hidden href="/category/digital.php" class="post-category"> digital  </a>
        <a hidden href="/category/mindset.php" class="post-category"> mindset</a>
        <a hidden href="/category/stories.php" class="post-category"> stories  </a>
        <a hidden href="/category/travels.php" class="post-category"> travels</a>
        <a hidden href="/category/wordcraft.php" class="post-category"> wordcraft  </a>
    </span>
            </p>
            
            <div class="post-content">
              <?php include dirname(__DIR__, 3) . '/includes/social-share.php'; ?> 
                
              <p>Growing up, I was taught not to brag. ‘Children should be seen and not heard’ — I would hear from my parents whenever they felt I was getting too big for my boots. Despite having taught myself to read at the tender age of four, I was not allowed to tell other people that I was smart. I was expected to wait for their acknowledgement.

<br><br>Over the years, I have found myself in many situations that would prove my parents right, and when the pros of being humble outweighed the cons.

<br><br>Yet, the world keeps changing. Rapid technological advancement and modernisation brought sociocultural changes that have affected our perception of the two fundamental concepts that guide human behaviour and decision-making.

<br><br>With the emergence of social media, ‘flaunting what you’ve got and what others are missing and therefore should want’ became a must. Bragging has taken on a new dimension and as influencing became recognized as a real job, it quickly penetrated everyone’s awareness and spread across the job market as well.

<br><br>Although I have managed to keep up with the advancing technologies, the disparity between the values I was taught while growing up and the current reality kept creating an inner conflict that would pop up every time I sat down to write my professional resume.

<br><br>Whenever I tried to come up with my most impressive achievements and best qualities, I couldn’t think of anything for fear of being viewed as a bragger. I genuinely believed that good things sell themselves, and if I could not sell myself for who I was, then perhaps I didn’t deserve to have a good job.

<br><br>That was until chatGPT happened.

<br><br>Unbiased, emotionally uninvolved, objective, matter of fact — AI has offered me a new perspective and helped me to overcome my impostor syndrome simply by choosing the right words for my resume.

<br><br>The following conversation is an example of how chatGPT modifies text to make it more appealing to potential employers:

  <br><br><br>My prompt:<br><br>

<i>ChatGPT, how would you make this job experience more attractive and professional and highlight the skills gained?

I approached customers and offered high-quality translating services. I developed my own website using WordPress and Elementor. I dealt with customer requirements, resolved issues, and carried out projects for clients.

<br><br>chatGPT:<br><br>

To make this experience sound more professional and highlight the skills you’ve gained, here’s an improved version:
<br><br>
— -
<br><br>
Freelance Translator & Web Developer
<br><br>
Provided tailored language solutions by actively engaging with clients to understand their translation needs, offering high-quality, accurate translations that met professional standards.
<br><br>
Developed and managed a personal website using WordPress and Elementor, creating an online platform to showcase services, manage client interactions, and optimize the client experience.
<br><br>
Demonstrated strong customer service and problem-solving skills, managing customer requirements, resolving inquiries, and ensuring high client satisfaction.
<br><br>
Successfully delivered client projects from initial consultation to project completion, balancing multiple assignments and adhering to deadlines.
<br><br><br><br>
Key Skills: Customer Relationship Management, Project Coordination, WordPress Development, Problem Solving, Communication Skills, Time Management</i>
<br><br>
Once I started using the words offered by AI to describe myself, I realized that they perfectly describe who I am, which gave me a renewed sense of confidence.

<br><br>By using words stripped of emotions, AI allowed me to step out of my comfort zone and embrace my self-worth and helped me see that that acknowledging my skills and accomplishments is not a sign of arrogance but a necessary step toward professional growth.

<br><br>Kudos to that.</p>
              <!-- Add more content here -->
            </div>
            <div>
          </div>
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

</body>
</html>
