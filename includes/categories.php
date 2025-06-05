<?php
// Define categories as an array
$categories = [
    [
        'name' => 'Tech',
        'image' => '/assets/images/code-dark.webp',
        'alt' => 'screen with code on it',
        'link' => '../category/tech.php'
    ],
    [
        'name' => 'Digital',
        'image' => '/assets/images/freelance-work.webp',
        'alt' => 'a man, lying on a palm tree overseeing the beach',
        'link' => '../category/digital.php'
    ],
    [
        'name' => 'Wordcraft',
        'image' => '/assets/images/typewriter-flower.webp',
        'alt' => 'laptop, notebook, and a coffee cup on a desk',
        'link' => '../category/wordcraft.php'
    ],
    [
        'name' => 'Travels',
        'image' => '/assets/images/passport-hat.webp',
        'alt' => 'map book, coffee, spread bag on a bed',
        'link' => '../category/travels.php'
    ],
    [
        'name' => 'Mindset',
        'image' => '/assets/images/woman-looking-on-her-smartphone-and-laughing.webp',
        'alt' => 'woman-looking-on-her-smartphone-and-laughing',
        'link' => '../category/mindset.php'
    ],
    [
        'name' => 'Stories',
        'image' => '/assets/images/books-tea.webp',
        'alt' => 'two books and a cup of tea',
        'link' => '../category/stories.php'
    ],
];
?>

<div class="categories-container">
    <?php foreach ($categories as $category): ?>
        <div class="categories-item">
            <?php if (!empty($category['link'])): ?>
                <a href="<?= $category['link'] ?>">
            <?php endif; ?>
                <img src="<?= $category['image'] ?>" alt="<?= $category['alt'] ?>">
                <div class="categories-info">
                    <div class="categories-meta">
                        <span class="category-name"><?= $category['name'] ?></span>
                    </div>
                </div>
            <?php if (!empty($category['link'])): ?>
                </a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
