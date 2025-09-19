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
                'author' => 'Philip K. DIck',
                'purchaseUrl' => 'https://example.com' 
            ],
            [
                'name' => 'Project Hail',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'https://example.com'
            ]
        ];
    ?>

    <p>
        <?php foreach ($books as $book) : ?>
           <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?>
           </a>
           </li> 
        <?php endforeach ?> 
    </p>
    
</body>
</html>