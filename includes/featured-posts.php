<?php
// Define featured posts as an array
$featuredPosts = [
     [
        'image' => '/assets/images/website-management.webp',
        'alt' => 'cherryontop.io homepage',
        'title' => 'Why You Should Hire a Human to Manage Your Website',
        'link' => '/blog/2025/May/why-use-human-web-admin.php',
        'date' => '2025-05-20',
        'description' => '',
        'post_count' => '',        
    ],
     [
        'image' => '/assets/images/Google-Analytics.webp',
        'alt' => 'Google Analytics graphs',
        'title' => 'How to Set Up Google Analytics on Your Webpage',
        'description' => '',
        'date' => '2025-05-14',
        'post_count' => '',
        'link' => '/blog/2025/May/how-to-setup-google-analytics-website.php',
    
    ],
    [
        'image' => '/assets/images/person-on-beach-reading-book.webp',
        'alt' => 'a person lying on a beach reading a book',
        'title' => '8 Techniques to Achieve Your Goals',
        'description' => '',
        'date' => '2025-05-14',
        'link' => '/blog/2025/May/how-to-achieve-your-goals.php',
        'hidden' => false,
    ],

];
?>


<div class="fe-grid-container">
        <?php 
    $count = 0; // Initialize counter
    foreach ($featuredPosts as $post):
        if (isset($post['hidden']) && $post['hidden']) {
            continue; // Skip hidden posts
        }
        if ($count >= 3) {
            break; // Stop after displaying 3 posts
        }
        $count++; // Increment counter
    ?>
        <div class="fe-grid-item">
            <!-- Link applied only to the image and title (heading) -->
            <a href="<?= $post['link'] ?>">
                <img src="<?= $post['image'] ?>" alt="<?= $post['alt'] ?>">
                <div class="fe-grid-info">
                    <h3 class="fe-grid-heading"><?= $post['title'] ?></h3>
                </div>
            </a>
            <!-- Excerpt without link -->
            <?php if (!empty($post['excerpt'])): ?>
                <p class="fe-grid-excerpt"><?= $post['excerpt'] ?></p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
