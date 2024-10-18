<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // user defined function 
    echo "<h1>User Defined Functions</h1>";
    function sayKahfi($name, $age) {
        return "Hello " . $name . ", you are " . $age . " years old";
    }
    
    echo sayKahfi("Kahfi", 25);
    echo "<br>";
    // function to calculate numbers
    echo "<h1>Calculator</h1>";
    function calculator(int $num01, int $num02) {
        $result = $num01 + $num02;
        return $result;
    }

    echo calculator(10, 20);
    ?>
</body>
</html>