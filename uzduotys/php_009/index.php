<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis - PHP 09</title>

    <!-- <style>
        ul {
            list-style-type: none;
        }
    </style> -->
</head>

<body>
    
    <?php
    $valstybiuSostines = [
        'Italija' => 'Roma',
        'Liuksemburgas' => 'Liuksemburgas',
        'Belgija' => 'Briuselis',
        'Danija' => 'Kopenhaga',
        'Suomija' => 'Helsinkis',
        'Prancūzija' => 'Paryžius',
        'Slovakija' => 'Bratislava',
        'Slovenija' => 'Liublijana',
        'Vokietija' => 'Berlynas',
        'Graikija' => 'Atėnai',
        'Airija' => 'Dublinas',
        'Nyderlandai' => 'Amsterdamas',
        'Portugalija' => 'Lisabona',
        'Ispanija' => 'Madridas',
        'Švedija' => 'Stokholmas',
        'DidžiojiBritanija' => 'Londonas',
        'Lietuva' => 'Vilnius',
        'Čekija' => 'Praha',
        'Estija' => 'Talinas',
        'Vengrija' => 'Budapeštas',
        'Latvija' => 'Ryga',
        'Malta' => 'Valeta',
        'Austrija' => 'Viena',
        'Bulgarija' => 'Sofija',
        'Rumunija' => 'Bukareštas',
        'Lenkija' => 'Varšuva',
    ];
    asort($valstybiuSostines);
    ?>

    <ul>
        <?php
        foreach ($valstybiuSostines as $valstybe => $sostine) {
            echo "<li>$valstybe - $sostine</li>";
        }
        ?>
    </ul>

</body>

</html>