<?php
require_once ('animal.php');
require_once ('Frog.php');
require_once ('Ape.php');
$sheep = new Animal("shaun");

echo $sheep->name." "; // "shaun"
echo $sheep->legs." "; // 2 
echo $sheep->cold_blooded; // false
echo "<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// index.php
echo "<br>";
$sungokong = new Ape("kera sakti");
echo "Nama : ".$sungokong->name."<br>"; 
echo "Jumlah Kaki : ".$sungokong->legs."<br>"; 
echo "Berdarah Dingin : ".$sungokong->cold_blooded."<br>";
$sungokong->yell(); // "Auooo"
echo "<br>";

echo "<br>";
$kodok = new Frog("buduk");
echo "Nama : ".$kodok->name."<br>"; 
echo "Jumlah Kaki : ".$kodok->legs."<br>"; 
echo "Berdarah Dingin : ".$kodok->cold_blooded."<br>";
$kodok->jump() ; // "hop hop"
?>