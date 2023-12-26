<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ]
];

//function
function filter($items,$fn){
    $filteredItems = [];

    foreach ($items as $item) {
        if($fn($item)){
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}
//$filteredBooks = filter($books, function ($book){  //custom
//    return $book['releaseYear'] < 2000;
//});

$filteredBooks = array_filter($books, function ($book){  //php provided function
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
});
?>

<ul>
    <?php foreach ($filteredBooks as $book) : ?>

        <li>

            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>