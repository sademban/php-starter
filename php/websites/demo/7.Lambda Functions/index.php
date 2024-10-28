<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1> Recommended Books</h1>
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
        //#### this work asme as PHP array_funciton()

        // function filter($items, $fn) {
        //     $filterItems = [];

        //     foreach ($items as $item) {
        //         if($fn($item)) {
        //             $filterItems[] = $item;
        //         }
        //     }

        //     return $filterItems;
        // }


        // $filteredBooks = filter($books, function ($books){
        //     return $books['releaseYear'] < 2000;
        // });   

        $filteredBooks = array_filter($books, function ($books){
            return $books['author'] === 'Andy Weir';
        });
        var_dump($filteredBooks);
    ?>

    <p>
        <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author']?>
                </a>
                </li> 
        <?php endforeach; ?> 
    </p>
    
</body>
</html>