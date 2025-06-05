<?php
$selectedTag = isset($_GET['tag']) ? str_replace('-', ' ', $_GET['tag']) : '';

if ($selectedTag) {
    echo "<h2>Posts tagged with: " . htmlspecialchars(ucwords($selectedTag)) . "</h2>";

    $posts = [
        ['title' => 'Exploring the Alps', 'tags' => ['Travel', 'Adventure']],
        ['title' => 'Storytelling Techniques', 'tags' => ['Storytelling', 'Blogging']],
        ['title' => 'Capturing Landscapes', 'tags' => ['Photography', 'Travel']],
        ['title' => 'Top UK Destinations', 'tags' => ['UK Travel', 'Travel']]
    ];

    foreach ($posts as $post) {
        if (in_array(ucwords($selectedTag), $post['tags'])) {
            echo "<div class='post-item'><h3>{$post['title']}</h3></div>";
        }
    }
} else {
    echo "<h2>No tag selected</h2>";
}
?>
