<?php

function papan_catur($angka) {
    for( $i=1; $i<=$angka; $i++){
        if ($i%2==0){
            for($j=1; $j<=$angka-1; $j++){
                $b="&nbsp;#";
                echo $b;
            }
            echo "<br>";
        } else {
            for($j=1; $j<=$angka; $j++){
                $a="# ";
                echo $a;
            }
            echo "<br>";
        }
    }
}

// TEST CASES
echo "4x4<br>";
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */
echo "8x8<br>";
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "5x5<br>";
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>