<?php
echo ' php!';
$a=3;
$b=7;
echo  $a+$b;
echo "\n";

$array_month=["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
echo "\n";

$hello="HELLO";
$name="岩本隆光";
$world="‘s World!";
echo "$hello"."$name"."$world";
echo "\n";

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";

$_2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月",
];
echo $_2018_calendar["December"];
echo "\n";

$name = "a岩本隆光";
if($name == "岩本隆光"){
    echo "私のは岩本隆光です";
} else {
    echo "岩本隆光ではありません";
}
echo "\n";

$total = 0;
for($i = 1; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "orange", "lemon", "banana", "meron");
foreach($fruits as $a){
  echo "要素は" . $a;
  echo "\n";
}
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <=$end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}


 
