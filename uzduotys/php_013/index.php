<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

class Person {
    public $name;
    public $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function pasisveikinimas() 
    {
        echo 'Sveiki' . ' ' . $this->name . '!';
    }

}

$person1 = new Person('Jonas', 'Jonaitis');
$person2 = new Person('Petras', 'Petraitis');

$person1->pasisveikinimas();
echo '<br>';
echo $person1->name . ' ' . $person1->surname;
echo '<br>';
$person2->pasisveikinimas();
echo '<br>';
echo $person2->name . ' ' . $person2->surname;


?>

</body>
</html>