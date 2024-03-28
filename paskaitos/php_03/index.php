<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paiskaita 03</title>
</head>

<body>

    <?php
    define('SVETAINES_PAVADINIMAS', 'vilniuscoding.lt');
    echo '<h1>' . SVETAINES_PAVADINIMAS . '</h1>';
    echo '<h2>' . PHP_VERSION . '</h2>';
    echo '<h2>' . __FILE__ . '</h2>';


    ?>

    <form action="http://localhost/240213WEB160VAK_BE/paskaitos/php_03/validation.php" method="GET">
        <label for="first_name_field">Vardas: </label>
        <input id="first_name_field" type="text" name="first_name">
        <br>
        <label for="city_field">Miestas: </label>
        <input id="city_field" type="text" name="city">
        <br>
        <button>Pateikti</button>
    </form>


    <form action="http://localhost/240213WEB160VAK_BE/paskaitos/php_03/post_validation.php" method="POST">
        <label for="first_name_field">Vardas: </label>
        <input id="first_name_field" type="text" name="first_name">
        <br>
        <label for="city_field">Miestas: </label>
        <input id="city_field" type="text" name="city">
        <br>
        <button>Pateikti</button>
    </form>


</body>

</html>