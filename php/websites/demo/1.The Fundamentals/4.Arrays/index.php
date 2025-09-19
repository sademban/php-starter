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
            "Do Android Drreams of Electric Sheep", 
            "The Langoliers", 
            "Hail Mary"
        ];
    ?>

    <ul>
         <?php 
            // foreach ($books as $book) {
            //     echo "<li>{$book}™️</li>";
            // }
        ?> 
        <br>
        <?php foreach ($books as $book): ?>
            <li><?= $book ?>™️</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>