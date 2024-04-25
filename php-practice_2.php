<?php
// Q1 tic-tac問題

for ($calc = 1; $calc <= 100; $calc++) {
  if ($calc % 5 === 0 && $calc % 4 === 0) {
        echo 'tic-tac' . "\n";
    } elseif ($calc % 5 === 0) {
        echo 'tac' . "\n";
    } elseif ($calc % 4 === 0) {
        echo 'tic' . "\n";
    } else {
        echo $calc . "\n";
  }
}




// Q2 多次元連想配列
//問題１
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];


echo ($personalInfos[1]['name']) . 'の電話番号は' . ($personalInfos[1]['tel']) . 'です。';

//問題２
foreach ($personalInfos as $index => &$value){
  $index ++;

  echo $index . '番目の' . $value['name'] . 'のメールアドレスは' . $value['mail'] . 'で、電話番号は' . $value['tel'] . 'です。' . "\n";
}

//問題３
$ageList = [25, 30, 18];

foreach ($personalInfos as $key => & $val){
  $val["age"]= $ageList[$key];
}

unset ($val);
var_dump ($personalInfos);


// Q3 オブジェクト-1

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
        echo '授業に出席しました。';
    }
}

$Student = new student('30','佐々木');

echo '学籍番号'. $Student->studentId . '番の生徒は'. $Student->studentName. 'です。';

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
        echo $this->studentName . 'はphpの授業に参加しました。学籍番号:' . $this->studentId;
        
    }
}

$student = new Student('30','佐々木');

$student->attend();


// Q5 定義済みクラス

$date = new DateTime ('2024-4-06');
$prev_date = $date->modify ('-1 month') ->format('Y-m-d');
echo $prev_date;

$time1 = new DateTime('1992-04-25');
$time2 = new DateTime('2024-04-21');

$diff = $time1->diff($time2);

echo 'あの日から' . $diff->format('%a日') . '経過しました';



?>