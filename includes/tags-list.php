<?php
$tags = [
  'Travel' => 5,
  'UK Travel' => 3,
  'Storytelling' => 7,
  'Photography' => 4,
  'Blogging' => 6,
  'Tips' => 2,
  'Adventure' => 8
];

echo '<div class="widget tags"><h3>Tags</h3><div class="tag-list">';
foreach ($tags as $tag => $count) {
    echo '<a href="/tags/' . urlencode(strtolower(str_replace(' ', '-', $tag))) . '">
            <span>' . $tag . ' (' . $count . ')</span>
          </a>';
}
echo '</div></div>';
?>
