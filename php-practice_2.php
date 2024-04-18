<?php
// Q1 tic-tac問題
$i = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i %4===0) {
        echo 'tic' . "\n";
      continue;
    } elseif ($i % 5 === 0) {
        echo 'tac' . "\n";
       continue;
    } elseif ($i % 5 === 0 && $i %4===0) {
        echo 'tic-tac' . "\n";
     continue;
    }
    echo $i . "\n";

// Q2 多次元連想配列
//問題１
echo ($personalInfos[1]['name'] ).'の電話番号は'.($personalInfos[1]['tel'] ).'です。';

//問題２
foreach ($personalInfos  as $index => $value) {
  $index ++;
  echo  $index .'番目の'. $value['name'].'のメールアドレスは'. $value['mail'] . 'で、電話番号は'.$value['tel'].'です。'. "\n";
}

//問題３
$ageList = [25, 30, 18];

foreach($personalInfos as $key=>&$val){
  $val["age"]=$ageList[$key];
}
unset($val);
var_dump($personalInfos);


// Q3 オブジェクト-1
$Student = new Student('30','佐々木');

echo '学籍番号'. $Student ->studentId . '番の生徒は'. $Student ->studentName. 'です';

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo $this -> studentName. 'はphpの授業に参加しました。学籍番号:'.$this ->studentId;
        
    }
}

$Student = new Student('30','佐々木');

$Student -> attend();


// Q5 定義済みクラス

$date = new DateTime('2024-4-06');
$prev_date = $date->modify('-1 month')->format('Y-m-d');
echo $prev_date;

?>