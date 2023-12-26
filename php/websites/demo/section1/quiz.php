<?php

$business = [
    'name ' => 'Laracasts',
    'cost' => 15,
    'categories' => ["Testing", "PHP", "Javascript"]
];

foreach ($business['categories'] as $category) {
    echo "{$category}". "<br>";
}