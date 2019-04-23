<?php
$name = "yutaro";
if ($name == "yuta") {
    echo "私は" .$name ."です。" ;
} else {
    echo $name. "ではありません。" ."\n" ;
}
$total = 0;
for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total ."\n";
$fruits = array("apple", "orange", "melon", "grape", "banana");
foreach($fruits as $fruit){
    echo $fruit ."\n" ;
}
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0){
    echo $i ."\n";
    }
}