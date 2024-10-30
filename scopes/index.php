<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // global scope
    echo "<h1>Global Scope</h1>";
    $globalVar = "Ashabul";
    function myFunction () {
        global $globalVar;
        $localVar = "kahfi";

        return $GLOBALS['globalVar'];
    }

    echo myFunction();
    
    // local scope
    echo "<h1>Local Scope</h1>";

    function myFunction2 () {
        $staticVar = 0;

        $staticVar++;

        return $staticVar;
    }

    echo myFunction2();
    ?>
</body>
</html>