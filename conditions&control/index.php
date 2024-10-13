<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // if else
    echo "<h1>If else</h1>";
    $bool = true;
    $a = 1;
    $b = 10;

    if ($a < $b && !$bool) {
        echo "First true";
    }
    else if ($a < $b && $bool) {
        echo "Second true";
    } else {
        echo "No one of them true";
    }

    // switch
    echo "<h1>Switch</h1>";

    switch ($a) {
        case 1:
            echo "The first case is correct";
            break;
        case 2: 
            echo "The second case is correct";
        default:
            echo "no one of them is correct";
    }
    echo "<br>";

    $result = match ($a) {
        1 => "variable a is equal to one",
        2 => "variable a is equal to two",
        default => "No one of them match"
    };
    echo $result

    ?>
</body>
</html>