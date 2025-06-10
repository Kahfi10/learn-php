    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        // grab data from input
        $num01 = filter_input(INPUT_POST, 'num01',
        FILTER_VALIDATE_FLOAT);
        $num02 = filter_input(INPUT_POST, 'num02',
        FILTER_VALIDATE_FLOAT);
        $operator = htmlspecialchars($_POST['operator']);

        // error handler
        $errors = false;

        if ($num01 === false || $num02 === false || empty($operator)) {
            echo "<p class='error'>All fields are required and must be valid numbers</p>";
            $errors = true;
        }

        // calculate the numbers id if no errors

        if (!$errors) {
            $value = 0;
            switch ($operator) {
            case "add":
                $value = $num01 + $num02;
                break;
            case "subtract":
                $value = $num01 - $num02;
                break;
            case "multiply":
                $value = $num01 * $num02;
                break;
            case "divide":
                $value = $num01 / $num02;
                break;
            default:
                echo "<p class='error'>Something are wrong</p>";
            case "divide":
                if ($num02 == 0) {
                    echo "<p class='error'>Cannot divide by zero</p>";
                    $errors = true;
                    break;
        }
        if (!$errors) {
            echo "<p class='success'>The result is: $value</p>";
        }
    }
}
    ?>