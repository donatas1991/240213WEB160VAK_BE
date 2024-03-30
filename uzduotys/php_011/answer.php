<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    if (!isset($_POST['submit']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['birthdate'])) {
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $birthdate = $_POST['birthdate'];

        echo "<p>$name</p>";
        echo "<p>$email</p>";
        echo "<p>$birthdate</p>";
    }
    ?>


</body>
</html>