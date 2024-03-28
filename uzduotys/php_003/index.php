<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis - PHP 03</title>
</head>

<body>

    <?php

$x = 5;
$y = 9;
$sudetis = $x + $y;
$atimtis = $x - $y;
$sandauga = $x * $y;
$dalyba = $x / $y;
$liekana = $x % $y;


    ?>

<!-- <p>10 + 7 = 17</p> -->

<p><?php echo "$x + $y = $sudetis"; ?></p>
<p><?php echo "$x - $y = $atimtis"; ?></p>
<p><?php echo "$x * $y = $sandauga"; ?></p>
<p><?php echo "$x / $y = $dalyba"; ?></p>
<p><?php echo "$x % $y = $liekana"; ?></p>

</body>

</html>