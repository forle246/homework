<?php
//PHP/Laravel 04 関数を理解しよう 課題提出

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double ($d){
    return $d * 2 ;
}
echo double(99) ."\n";

//2.$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成してください。
function addsum ($a,$b){
  return $a + $b ;  
}
echo addsum(4,7) ."\n" ;

//3.$arr という配列の仮引数を持ち、
//数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。
function product($arr) {
    $total = 1;
    foreach($arr as $a) {
        $total = $total * $a;
    }
    return $total;
}

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す 
//max_array という関数を実装しようとしています。途中の部分を完成させてください。
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

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

//array_merge
// 配列
	$queue1 = [
		"a" => 1 ,
		"b" => 2 ,
	] ;

	$queue2 = [
		"c" => 3 ,
		"d" => 4 ,
	] ;
	$result = array_merge( $queue1, $queue2 ) ;
	print_r( $result ) ;
	
//time
echo '現在のUnixタイムスタンプ：'.time();
echo "\n";

//mktime
$timestamp = mktime(0, 0, 0, 5, 1, 2019);
echo "2019年5月1日のタイムスタンプ". $timestamp;
echo "\n";

//date
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d (D) H:i:s"). "\n";