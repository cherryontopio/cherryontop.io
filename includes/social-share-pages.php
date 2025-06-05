<?php
// Get the current page URL dynamically
$page_url = urlencode("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>
<div>
    <h2 class="social-share-title">
        Share this page
    </h2>
<div class="social-share-pages">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page_url; ?>" target="_blank">
        <i class="fab fa-facebook fa-3x"></i> 
    </a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $page_url; ?>" target="_blank">
        <i class="fab fa-linkedin fa-3x"></i> 
    </a>
    <a href="https://twitter.com/intent/tweet?url=<?php echo $page_url; ?>" target="_blank">
        <i class="fab fa-twitter fa-3x"></i> 
    </a>
    <a href="https://www.instagram.com/" target="_blank">
        <i class="fab fa-instagram fa-3x"></i> 
    </a>
    <a href="https://www.reddit.com/submit?url=<?php echo $page_url; ?>" target="_blank">
        <i class="fab fa-reddit fa-3x"></i> 
    </a>
    <a href="https://api.whatsapp.com/send?text=<?php echo $page_url; ?>" target="_blank">
        <i class="fab fa-whatsapp fa-3x"></i> 
    </a>
    <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo $page_url; ?>" target="_blank">
        <i class="fab fa-pinterest fa-3x"></i> 
    </a>
    <a href="mailto:?subject=Check%20this%20out!&body=<?php echo $page_url; ?>">
        <i class="fas fa-envelope fa-3x"></i> 
    </a>
</div>
</div>
