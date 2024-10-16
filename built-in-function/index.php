<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Built-in function
    echo "<h1> Built-in Function </h1>";

    $string = "Hello World";
    echo "<h1> String </h1>";
    echo strpos ($string, "World");
    echo "<br>";
    echo str_replace("World", "Kahfi", $string);
    echo "<br>";
    echo strtolower($string);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo substr($string, 2, 5);
    echo "<br>";
    print_r(explode(" ", $string));

    echo "<h1> Number </h1>";

    $number = -10.5;

    echo abs($number); // absolute value
    echo "<br>";
    echo round($number); // round
    echo "<br>";
    echo pow(2, 3); // power
    echo "<br>";
    echo sqrt(16); // square root
    echo "<br>";
    echo rand(12, 20); // random number 

    // Array

    echo "<h1> Array </h1>";

    $array1 = ["apel", "mangga", "jeruk"];
    $array2 = ["anggur", "nanas", "pepaya"];

    echo count($array1);
    echo "<br>";
    echo is_array($array1);
    echo "<br>";
    array_push($array1, "anggur");
    print_r($array1);
    echo "<br>";
    array_pop($array1);
    print_r($array1);
    echo "<br>";
    print_r((array_merge($array1, $array2)));
    echo "<br>";

    // Date time
    echo "<h1> Date Time </h1>";

    $date = "2024-10-16 10:00:00";

    echo date("d/m/Y");
    echo "<br>";
    echo time();
    echo "<br>";
    echo strtotime($date);


    ?>
</body>
</html>