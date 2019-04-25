<?php
function double ($d){
    return $d * 2 ;
}
echo double(3) ."\n";

function addsum ($a,$b){
  return $a + $b ;  
}
echo addsum(4,7) ."\n" ;


function product($arr) {
    $total = 1;
    foreach($arr as $a) {
        $total = $total * $a;
    }
    return $total;
}

$arr = array(1,3,5,7,9);
$hoge = product($arr);
echo $hoge . "\n";

function max_array($arr){
    $max_number = $arr[0];
    $a = 1;
    foreach($arr as $a){
        if($max_number < $a)
        $max_number = $a ;
    }
    return $max_number ;
}

$arr = array(8,888,99);
$hoge = max_array($arr);
echo $hoge . "\n";