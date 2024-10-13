<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Arithmetic operators
    echo "<h1>Arithmetic operators</h1>";
    $a = 10;
    $b = 20;
    $c = $a . $b;

    echo $c;
    echo "<br>";
    echo 10 % 5;

    // assignment operators
    echo "<h1>Assignment operators</h1>";

    $a = 10;
    $a += 5;
    echo "<br>";
    echo $a;

    // comparison operators
    echo "<h1>Comparison operators</h1>";
    $a = 4;
    $b = "4";

    if ($a === $b) {
        echo "True";
    } else {
        echo "False";
    }

    $kecil = 10;
    $besar = 20;
    echo "<br>";
    if ($kecil <= $besar) {
        echo "True";
    } else {
        echo "False";
    }   

    // logical operators

    echo "<h1>Logical operators</h1>";

    $logika1 = 34;
    $logika2 = 56;

    if ($logika1 == 34 && $logika2 == 56) {
        echo "True";
    } else {
        echo "False";
    }

    // increment and decrement operators
    echo "<h1>Increment and decrement operators</h1>";
    
    $aa = 10;
    $aa++;
    echo $aa;

    $bb = 50;
    $bb+=5;
    echo "<br>";
    echo $bb;

    $cc = 10;
    $cc--;
    echo "<br>";    
    echo $cc;
    ?>
</body>
</html>