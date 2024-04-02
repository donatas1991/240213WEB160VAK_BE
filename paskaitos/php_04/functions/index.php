<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Funkcijų pavyzdžiai</h1>

    <?php

    function pasisveikinimas($vardas)
    {

        echo "<p>Labas $vardas !</p>";
    }

    pasisveikinimas('Donatas');
    pasisveikinimas('Kazimiras');
    pasisveikinimas('Dovile');
    pasisveikinimas('Pavelas');
    pasisveikinimas('Tomas');
    pasisveikinimas('Vytautas');


    function pasisveikinimoTekstas($vardas)
    {
        return "<p>Sveiki $vardas !</p>";
    }
    $pasisveikinimoTekstas1 = pasisveikinimoTekstas('Jonas');
    $pasisveikinimoTekstas2 = pasisveikinimoTekstas('Petras');
    $pasisveikinimoTekstas3 = pasisveikinimoTekstas('Antanas');

    echo $pasisveikinimoTekstas1 . $pasisveikinimoTekstas2 . $pasisveikinimoTekstas3;


    ?>

</body>

</html>