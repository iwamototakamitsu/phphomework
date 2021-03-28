<?php
function baisuu($a){
    $result = $a * 2;
    echo $result;
}

baisuu(4);
echo "\n";

function add($a,$b){
    $result = $a + $b;
    echo $result;
}
add(2,4);
echo "\n";

echo "php" . "入門";
echo 4*2;
echo 4/2;
echo "\n";

function addd($arr){
    $result = 1;
    foreach ($arr as $kazu) {
        $result = $result * $kazu;
    }
    return $result;
}
//echo addd(array(1, 3, 5 ,7, 9));
echo addd(array(2, 4));
echo "\n";

 function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
        if ($max_number < $a) {
            $max_number = $a ;
        }
     }
    
     return $max_number;
 }
 echo max_array(array(1,5,3,7));
 echo "\n";
 
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";

echo "\n";

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";

// デフォルトのタイムゾーンを設定します。PHP 5.1 以降で使用可能です
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
echo "\n";

date_default_timezone_set('Asia/Tokyo');
echo '<p>', date('Y/m/d H:i:s'), '</p>';
