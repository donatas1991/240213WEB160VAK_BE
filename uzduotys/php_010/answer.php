<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    if (!isset($_POST['calculate']) || empty($_POST['length']) || empty($_POST['width'])) {
    } else {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $area = $length * $width;
        echo 'Stačiakampio plotas:';
        echo $area;
    }
    ?>


</body>
</html>