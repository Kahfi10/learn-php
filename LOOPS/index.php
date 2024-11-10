<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "For Loop ";
    echo "<br>";
    for($i = 0; $i < 5; $i++) {
        echo "iterasi " . $i . "<br>";
    }

    echo "<br>";
    echo "While Loop ";
    echo "<br>";

    $test = 4;
    while($test < 12) {
        echo "iterasi " . $test . "<br>";
        $test++;
    }
    
    ?>
</body>
</html>