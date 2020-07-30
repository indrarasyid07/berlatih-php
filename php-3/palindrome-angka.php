<?php

function palindrome_angka($angka) {
    $terbalik = "";
    $strAngka = strval($angka);
    $hasil = "";
    for($i=strlen($strAngka)-1;$i>=0; $i--){
        $terbalik.=$strAngka[$i];}
    if ($terbalik==$strAngka){
        $angka+=1;
        echo $angka."<br>";
    } else {
        while (true) {
            $strAngka = strval($angka);
            $terbalik = '';
            for($i=strlen($strAngka)-1;$i>=0; $i--){
                $terbalik.=$strAngka[$i];
            }
            if ($terbalik==$strAngka){
                global $hasil;
                $hasil = $strAngka . '<br>';
                return $hasil;
            } else {
                $angka +=1;
            }
        }
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>