<?php

//Exo1:
$myText = "Aujourd'hui il fait -1000 degrés";
$myText = addslashes($myText);
echo $myText . "<br>";

//Exo2:
$test = "je suis en formation dwwm";
echo strtoupper($test) ."<br>";

echo ucfirst($test) ."<br>";

echo ucwords($test) ."<br><br>";

$chaine = "JE SUIS EN FORMATION DWWM";
echo strtolower($chaine) ."<br>";

echo lcfirst($chaine) ."<br>";

//Exo3:
$chaine2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo sapien a dui molestie malesuada. 
Nam sit amet mollis massa. Ut a neque ultrices odio.";

echo str_word_count($chaine2);
echo "<br><br>";

//Exo4:
$chaine3 = "Nous sommes obligés d'être en télétravail en raison du Covid, c'est plutôt chiant";
$mots = explode(" ", $chaine3);

foreach ($mots as $mot) {
    echo "$mot <br>";
}

//Exo5:
$array = [
    "moi",
    "moche",
    "et",
    "méchant",
];
$myChaine = implode($array);
echo $myChaine;
echo "<br><br>";

//Exo6:
$text = "Un, Deux, Trois, nous irons au bois";
echo strrev($test);
echo str_shuffle($text);

echo "<br><br>";

//Exo7:
$chaine4 = "<strong>Hello, </strong> nous apprenons <span style='color: blue;'>PHP</span>";
echo $chaine4;
$chaine4 = strip_tags($chaine4);

echo "<br><br>";

// Exo8:
$chaine5 = "Un, Deux, Trois, nous irons au bois";
if (strlen($chaine5) < 500) {
    echo "|" .$chaine5;
}
echo "<br><br>";

//Exo9:
$chaine6 = "Un, Deux, Trois, nous irons au bois";
$letter = str_split($chaine6);
foreach ($letter as $item) {
    echo "$item <br>";
}

//Exo10:
$chaine7 = "Un, Deux, Trois, nous irons au bois";
echo str_replace("bois","champs", $chaine7 );
echo "<br><br>";

//Exo11:
$chaine8= "Un, Deux, test, nous irons au bois";
$position = strpos($chaine8, "test");
if ($position !== false) {
    echo "Le mot n'a pas été trouvé";
}
else {
    echo "Le mot test a été trouvé";
}

echo "<br><br>";

//Exo 12 et 13:
$chaine9 = "Nous sommes le 12 Janvier2021";
$search = "Nous";

$position = strpos ($chaine9, $search);
if($position === 0) {
    echo "La chaîne '$search' a été trouvé en début de chaîne";
}
elseif ($position === strlen($chaine9) - strlen($search)) {
    echo "La chaîne '$search' a été trouvé en fin de chaîne";
}
