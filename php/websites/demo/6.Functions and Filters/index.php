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

        function filterByAuthor($books, $author) {
            $filterBooks = [];

            foreach ($books as $book) {
                if($book['author'] === $author) {
                    $filterBooks[] = $book;
                }
            }

            return $filterBooks;
        }
    ?>

    <p>
        <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author']?>
                </a>
                </li> 
        <?php endforeach; ?> 
    </p>
    
</body>
</html>