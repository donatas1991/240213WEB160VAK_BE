<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis - PHP 11</title>
</head>

<body>
    <h2>Vartotojo duomenų forma</h2>

    <form action="http://localhost/240213WEB160VAK_BE/uzduotys/php_011/answer.php" method="post">
        <label for="name">Vardas:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">El. paštas:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="birthdate">Gimimo data:</label><br>
        <input type="date" id="birthdate" name="birthdate" required><br><br>
        <button type="submit" name="submit">Pateikti</button>
    </form>


    <?php
    if (
        !isset($_POST['submit'])
        || empty($_POST['name'])
        || empty($_POST['email'])
        || empty($_POST['birthdate'])
    ) {
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $birthdate = $_POST['birthdate'];

        echo $name;
        echo $email;
        echo $birthdate;
    }
    ?>
</body>

</html>