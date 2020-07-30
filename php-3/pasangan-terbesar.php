<?php
function pasangan_terbesar($angka){
    $kombinasiTerbesar = substr($angka,0,2);
    for ($i=0; $i<=strlen($angka)-2;$i++){
        $kombinasi=substr($angka,$i,2);
        if($kombinasi>$kombinasiTerbesar){
            $kombinasiTerbesar=$kombinasi;
        }
    }
    return $kombinasiTerbesar."<br>";
}
// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>  