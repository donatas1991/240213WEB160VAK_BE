<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis - PHP 12</title>
</head>

<body>

    <?php

    function staciakampioPlotas($a, $b)
    {
        return $a * $b;
    }

    ?>
    <ul>
        <li><?php echo staciakampioPlotas(5, 4); ?></li>
        <li><?php echo staciakampioPlotas(10, 7); ?></li>
        <li><?php echo staciakampioPlotas(1, 14); ?></li>
    </ul>

</body>

</html>