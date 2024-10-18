<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function sayKahfi($name, $age) {
        return "Hello " . $name . ", you are " . $age . " years old";
    }
    
    echo sayKahfi("Kahfi", 25);
    ?>
</body>
</html>