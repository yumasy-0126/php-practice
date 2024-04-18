<?php

// Q1

$name ='畠山';
echo "私の名前は $name です";

// Q2 四則演算
$num = (5*4);

echo ($num) ;

echo "\n";

echo ($num / 2 );

// Q3 日付操作
$today = date ("y年 m月 d日 H時:i分:s秒");

echo "現在時刻は、 $today です。";

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows') {
    
    echo'使用OSは、windowsです。';
}
if ($device === 'mac') {
    
    echo'使用OSは、macです';
    
}else {
        echo'どちらでもありません。';
    }

// Q5 条件分岐-2 三項演算子
$age = 5;

$message = ($age > 18) ? '成人です':'未成年です';

echo $message;
// Q6 配列
$sitys = ['群馬','茨城','埼玉','栃木','千葉','東京','神奈川'];

echo " $sitys[3]と$sitys[4]は関東地方の都道府県です。";

// Q7 連想配列-1
$sitys = [
  '東京' =>'新宿区',
  '神奈川' =>'横浜市',
  '千葉' =>'千葉市',
  '埼玉' =>'さいたま市',
  '栃木' =>'宇都宮市',
  '群馬' =>'前橋市',
  '茨城' =>'水戸市',
  ];

  foreach ($sitys as $keys => $valuses){
  echo $valuses ."\n";
}

// Q8 連想配列-2
if(array_key_exists('埼玉',$sitys)===true){
  echo '埼玉県の県庁所在地は、さいたま市です';
}
// Q9 連想配列-3
$sitys ['北海道'] = '札幌市';
$sitys ['沖縄'] = '那覇市';

foreach ($sities as $key => $value){
  //echo  $key. 'の県庁所在地は'. $value. 'です。'."\n";
if($key==='東京' || $key==='千葉'|| $key==='神奈川'||$key==='埼玉'||$key==='群馬'||$key==='茨城'||$key==='栃木'){
  echo $key. 'の県庁所在地は'. $value. 'です。'."\n";
}else {
  echo  $key . 'の県庁所在地は関東じゃない'."\n";
}}


// Q10 関数-1

function sayHi($name){
  echo $name .'こんにちは'."\n";
}
sayHi('清水さん');
sayHi('国立さん');

// Q11 関数-2
function calc($price){
  $taxInPrice = $price * 1.1;
  echo $price .'円の商品の税込価格は'.$taxInPrice .'円です';
  }
  
  $taxInPrice= calc(1000);

// Q12 関数とif文
function calc($distinguishNum){
  if($distinguishNum% 2 === 0){
      echo $distinguishNum .'は偶数です。'."\n";
  }else{
      echo $distinguishNum . 'は奇数です。'."\n";
  }
}
calc (34);
calc(35);



// Q13 関数とswitch文
function calc($evaluateGrade){
  switch ($evaluateGrade){
      case 'A':
      case 'B';
          echo  '合格です'."\n";
          break;
      case  'C';
       echo '合格ですが追加課題があります。' ."\n";
       break ;
      case  'D';
      echo '不合格です。';
       break;
      default:
          echo '判定不明です。講師に問い合わせてください。'."\n";
          break;}
  }
  calc('dsa');
  calc('A');

?>