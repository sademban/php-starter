<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php
        #1
            echo "Hello," . " Universe!<br>";
        #2
            $greeting = "Hello";

            echo $greeting ." "."World!<br>";
        #3
            echo "$greeting World!"; # you cannot use single quotes to display variables value
        ?>
    </h1>
</body>
</html>
