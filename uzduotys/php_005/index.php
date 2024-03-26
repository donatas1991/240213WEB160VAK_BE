<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 004</title>
</head>

<body>

    <?php
    $cities = [
        'Berlynas',
        'Roma',
        'Londonas',

    ];
    $cities[] = 'Tokijas';

    $cities3 = [
        'tokijas' => 13.5,
        'vasingtonas' => 0.6,
        'maskva' => 11.5,
    ];
    $cities2['londonas'] = 8.6;
    print_r($cities2);

    print_r($cities);

    ?>

    <ul>
        <?php
        echo "<li>$cities[1]</li>";
        ?>
    </ul>

    <ul>
        <li>
            <?php
            // echo 'Gyventoju skaicius: ' . $cities2['tokijas'] . ' mln.';
            ?>
        </li>
    </ul>


    <!-- - Sukurk ir išvesk naują $cities3 masyvą masyve, kurio duomenys:
- Tokijas - 13.6, 1868, Japonija
- Vasingtonas - 0.6, 1790, JAV
- Maskva - 11.5, 1147, Rusija
- Pridėk: Londonas - 8.6, 43, Anglija
- HTML dalyje, sukurk <ul> ir panaudok <li>, kad išvestum duomenis apie Londoną tokiu formatu:
- Gyventojų skaičius: 8.6 mln.
- Įkurtas: 43 m.
- Šalis: Anglija -->

    <?php
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija'],
    ];
    $cities3['Londonas'] = [8.6, 43, 'Anglija'];
    echo '<br>';
    print_r($cities3);

    ?>

    <ul>
        <?php
        echo '<li> Gyventoju skaicius: ' . $cities3['Londonas'][0] . ' mln </li>';
        echo '<li> Ikurta: ' . $cities3['Londonas'][1] . ' m. </li>';
        echo '<li> Salis: ' . $cities3['Londonas'][2] . '</li>';
        ?>
    </ul>

</body>

</html>