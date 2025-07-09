<?php
// Define the featured posts array with a date field
$featured_posts = [
    [
        'image' => '/assets/images/promo-pic.webp',
        'alt' => 'how to become a best-selling author landing page',
        'title' => 'Course Sign Up: How to Promote Your Book Online',
        'link' => '/courses/how-to-promote-book-online.php',
        'date' => '2025-07-09',
        'description' => '',
        'post_count' => '',
    ],
    [
        'image' => '/assets/images/promo-pic.webp',
        'alt' => 'how to become a best-selling author landing page',
        'title' => 'Course Teaser: Book Promotion',
        'link' => '/blog/2025/July/teaser-promote-book-online.php',
        'date' => '2025-07-09',
        'description' => '',
        'post_count' => '',
    ],
    [
        'image' => '/assets/images/website-management.webp',
        'alt' => 'cherryontop.io homepage',
        'title' => 'Hire a Human Web Admin',
        'link' => '/blog/2025/May/why-use-human-web-admin.php',
        'date' => '2025-05-20',
        'description' => '',
        'post_count' => '',
    ],
    [
        'image' => '/assets/images/Google-Analytics.webp',
        'alt' => 'Google Analytics graphs',
        'title' => 'Set Up Google Analytics',
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
        'hidden' => true,
    ],
    [
        'image' => '/assets/images/we-can.webp',
        'alt' => 'sign We Can',
        'title' => 'Positive Thinking',
        'link' => '/blog/2025/May/role-of-positive-thinking-in-success.php',
        'description' => 'The role of positive thinking in achieving success',
        'date' => '2025-05-14'
    ],
    [
        'image' => '/assets/images/fleas-in-a-jar.webp',
        'alt' => 'fleas in a jar for experiment',
        'title' => 'The Flea in a Jar',
        'link' => '/blog/2025/May/flea-in-jar.php',
        'description' => 'Is the famous Fleas in a Jar Experiment true?',
        'date' => '2025-05-14'
    ],
    [
        'image' => '/assets/images/writers-toolbox.webp',
        'alt' => 'writers tools',
        'title' => 'The Skills Every Writer Needs',
        'link' => '/blog/2025/May/stephen-king-on-writing.php',
        "description" => "The wisdom from Stephen King's Writer's Toolbox.",
        'date' => '2025-05-13',
        'hidden' => true,
    ],
    [
        'image' => '/assets/images/Raymond_Chandler.webp',
        'alt' => 'black and white photo of Raymond Chandler holding his cat',
        'title' => 'The Wisdom of Raymond Chandler',
        'link' => '/blog/2025/May/raymond-chandler-on-writing.php',
        "description" => "A few quotes on writing by my favourite author, Raymond Chandler.",
        'date' => '2025-05-13',
        'hidden' => true,
    ],

];

// Sort posts by date (newest first)
usort($featured_posts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

?>
<div class="featured-index-container">
    <?php
    $count = 0; // Initialize counter
    foreach ($featured_posts as $post):
        if (isset($post['hidden']) && $post['hidden']) {
            continue; // Skip hidden posts
        }
        if ($count >= 5) {
            break; // Stop after displaying 5 posts
        }
        $count++; // Increment counter
    ?>
        <div class="featured-index-item">
            <a href="<?= $post["link"] ?>" class="featured-index-link">
                <img src="<?= htmlspecialchars($post["image"]) ?>" alt="<?= htmlspecialchars($post["alt"]) ?>">
                <div class="featured-index-content">
                    <h3 class="featured-index-title"><?= $post["title"] ?></h3>
                    <p class="featured-index-description"><?= $post["description"] ?></p>
                </div>
            </a>

        </div>
    <?php endforeach; ?>
</div>