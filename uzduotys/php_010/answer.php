<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    if (
        !isset($_GET['calculate'])
        || empty($_GET['length'])
        || empty($_GET['width'])
    ) {
    } else {
        $length = $_GET['length'];
        $width = $_GET['width'];
        $area = $length * $width;
        echo 'Stačiakampio plotas:';
        echo $area;
    }
    ?>


</body>

</html>