<?php

// Q1

$name='畠山';
echo '私の名前は「'. $name . '」です';

// Q2 四則演算
$num = 5 * 4;

echo $num;
echo "\n";
echo $num / 2;

// Q3 日付操作
$today = date("Y年m月d日 H時i分s秒");

echo '現在時刻は、' . $today . 'です。';

// Q4 条件分岐-1 if文
$device = 'w';

if ($device === 'windows'|| $device === 'mac'){
    echo'使用OSは、' . $device . 'です。';
} else {
  echo'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 5;

$message = ($age > 18) ? '成人です' : '未成年です';

echo $message;

// Q6 配列
$kanto = ['群馬','茨城','栃木','千葉','埼玉','東京','神奈川','新宿区'];

echo " $kanto[2]と$kanto[3]は関東地方の都道府県です。";

// Q7 連想配列-1
$prefectures = [
  '東京' =>'新宿区',
  '神奈川' =>'横浜市',
  '千葉' =>'千葉市',
  '埼玉' =>'さいたま市',
  '栃木' =>'宇都宮市',
  '群馬' =>'前橋市',
  '茨城' =>'水戸市',
];

foreach ($prefectures as $key =>$value)
{
      echo $value . "\n";
}

// Q8 連想配列-2
foreach ($prefectures as $key =>$value){
  if($key === '埼玉' ){
    echo '埼玉県の県庁所在地は、さいたま市です';
  }
}
// Q9 連想配列-3
$prefecture['北海道'] = '札幌市';
$prefecture['沖縄'] = '那覇市';

foreach ($prefecture as $key => $value){
  if($key==='北海道'||$key==='沖縄'){
    echo $key . 'の県庁所在地は関東じゃない' . "\n";
  }else{
      echo $key . 'の県庁所在地は' . $value . 'です。' . "\n";
  }
}


// Q10 関数-1

function sayHi($name)
{
  echo $name . 'こんにちは' ."\n";
}
sayHi('清水さん');
sayHi('国立さん');

// Q11 関数-2
function calcTaxInPrice($price)
{
    $total = $price * 1.1;
    return $total;
}

$price =1000;
$taxInPrice = calcTaxInPrice($price);

echo $price .'円の商品の税込価格は' . $taxInPrice . '円です。';

// $price =1000;
// $taxInPrice = calcTaxInPrice(1000,1.1);

echo $price .'円の商品の税込価格は' . $taxInPrice . '円です。';



// Q12 関数とif文
function distinguishNum($calc)
{
  if($calc % 2 === 0){
    return $calc . 'は偶数です。' . "\n";
  }else{
    return $calc . 'は奇数です。' . "\n";
  }
}

$calc = distinguishNum(26);
echo $calc;
$calc = distinguishNum(25);
echo $calc;



// Q13 関数とswitch文

function evaluateGrade ($test)
{
  switch ($test)
  {
      case 'A';
      case 'B';
          return '合格です' . "\n";
          break;
      case 'C';
       return '合格ですが追加課題があります。' . "\n";
       break ;
      case 'D';
      return '不合格です。';
       break;
      default:
          return '判定不明です。講師に問い合わせてください。' . "\n";
          break;
  }
}
$test =evaluateGrade('keod');
echo $test;
$test =evaluateGrade('C');
echo $test;
?>

