<?php
function skor_terbesar($arr){
    $tampungLaravel = [];
    $tampungReactNative = [];
    $tampungReactJs = [];
    for($i=0; $i<count($arr); $i++){
        if ($arr[$i]["kelas"]=="Laravel"){
            $tampungLaravel[]=$arr[$i];
        } else if ($arr[$i]["kelas"]=="React Native"){
            $tampungReactNative[]=$arr[$i];
        } else {
            $tampungReactJs[]=$arr[$i];
        }
    }
    array_multisort($tampungLaravel,SORT_ASC);
    array_multisort($tampungReactJs,SORT_ASC);
    array_multisort($tampungReactNative,SORT_ASC);
    echo "<pre>";
    echo "Data Kelas Laravel<br>"; print_r($tampungLaravel);
    echo "Data Kelas ReactJs<br>"; print_r($tampungReactJs);
    echo "Data Kelas ReactNative<br>"; print_r($tampungReactNative);
    echo "</pre>";
    $hasil = array(
        'Laravel'=>$tampungLaravel[0],
        'ReactNative'=>$tampungReactNative[0],
        'ReactJs'=>$tampungReactJs[0]
    );
    echo "<pre>"; 
    echo "OUTPUT Nilai Terbesar<br>";
    print_r($hasil);
    echo "</pre>";
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>