<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $fruits = array("Apple", "Banana", "Orange", "Mango");
    $fruits = [
        "Apple",
        "Banana",
        "Orange",
        "Mango"
    ];
    $fruits[1] = "Pineapple"; // change the value of the second element
    echo "<br>";
    unset($fruits[2]); // remove the third element
    echo $fruits[0];
    echo $fruits[1];

    echo "<br>";
    $tasks = [
        "Kahfi" => "Read Surah Al-Kahfi",
        "Ashabul" => "Membuang sampah",
        "Rumah" => "untuk di tinggali"
    ];

    echo $tasks["Kahfi"];
    echo "<br>";
    echo count($tasks);
    echo "<br>";
    print_r($tasks);
    echo "<br>";
    $tasks["kahfi"] = "tidur";

    $food = [
        "sayur" => array("bayam", "sawi", "kangkung"),
        "buah" => array("apel", "mangga", "jeruk"),
        "daging" => array("ayam", "sapi", "kambing")
    ];

    echo $food["sayur"][0];
    ?>
</body>
</html>