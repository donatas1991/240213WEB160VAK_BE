<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis - PHP 10</title>
    
</head>

<body>
    <h2>Stačiakampio ploto skaičiuoklė</h2>

    <form action="http://localhost/240213WEB160VAK_BE/uzduotys/php_010/answer.php" method="post">
        <label for="length">Stačiakampio ilgis:</label><br>
        <input type="number" id="length" name="length" required><br>
        <label for="width">Stačiakampio plotis:</label><br>
        <input type="number" id="width" name="width" required><br><br>
        <button type="submit" name="calculate">Skaičiuoti plota</button>
    </form>


    <?php
    if (!isset($_POST['calculate']) || empty($_POST['length']) || empty($_POST['width'])) {
    } else {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $area = $length * $width;
        echo $area;
    }
    ?>


</body>

</html>