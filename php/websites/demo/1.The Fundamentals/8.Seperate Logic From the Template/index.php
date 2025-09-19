<?php 

$books = [
    [
        'name' => 'Do Android Drreams of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1986,
        'purchaseUrl' => 'https://example.com' 
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'https://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'https://example.com'
    ]
];


$filteredBooks = array_filter($books, function ($books){
    return $books['author'] === 'Andy Weir';
});
// var_dump($filteredBooks);

require "index.view.php";