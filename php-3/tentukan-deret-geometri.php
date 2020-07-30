<?php
function tentukan_deret_geometri($arr) {
    $rasio=$arr[1]/$arr[0];
    echo "Deret Geometri : ";
    for($j=0;$j<count($arr);$j++){
        echo $arr[$j]." ";
    }
    echo "<br>";
    for($i=1;$i<count($arr);$i++){
        if(($arr[$i]/($arr[$i-1])) != $rasio){
            return "false<br>";
        }
    }
    return "true<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>