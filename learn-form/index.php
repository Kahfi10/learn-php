<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn-form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <form action="formhandler.php" method="post">
            <label for="firstname">firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="firstname...">
            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="lastname...">
            <label for="favoritefood">favorite food</label>
            <select name="favoritefood" id="favoritefood">
                <option value="none">None</option>
                <option value="nasigoreng">Nasi Goreng</option>
                <option value="miegoreng">Mie Goreng</option>
            </select>

            <button type="submit" name="submit">Submit</button>
            
        </form>
    </main>
</body>
</html>