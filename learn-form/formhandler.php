<?php 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]); 
    $lastname = htmlspecialchars($_POST["lastname"]); 
    $favoritefood = htmlspecialchars($_POST["favoritefood"]);

    if (empty($firstname)) {
        exit();
        header("Location: index.php");
    }

    echo "Your data is submitted:";
    echo "<br>";
    echo "Firstname: $firstname";
    echo "<br>";
    echo "Lastname: $lastname";
    echo "<br>";
    echo "Favorite food: $favoritefood";


    header("Location: index.php");
} else {
    header("Location: index.php");

}
