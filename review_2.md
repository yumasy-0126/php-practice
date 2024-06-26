# PHP練習問題② 説明

## 下記for文の`$i = 0`, `$i <= 4`, `$i++`, `echo $i`がそれぞれ、どの順番で処理されるか、また、何をしているのかを説明してください。

```
for ($i = 0; $i <= 4; $i++) {
    echo $i;
}
```

1. $i = 0
一番初めに定義（どの数字から始めるのか）指定

2.$i <= 4
for文を続ける条件ture かfalse

3.$i++
```
$i = $i+1
```
4.echo $i;
表示させる

順番 ⇨ 1 2 4 3 2 4 3 ・・・

## for文とforeachはどのように使い分けるのか説明してください。
-どちらも繰り返し処理に向いている

forの場合はループの条件などで指定ができる
数値を繰り返しするときに使用

foreachの場合は配列の中身を繰り返し処理したいときに使用できる
配列を繰り返し処理をするときに使用

## クラスとインスタンスの違いについて説明してください。
- クラス：設計図。
    - オブジェクトの変数や関数を定義しておく設計図。
- インスタンス：実体。
    - オブジェクトの実体。
    - new演算子を使って、クラスをもとに実体化させることができる。インスタンス化（実体化）することによって使用ができる。


## プロパティとメソッドとはなにか説明してください。
- プロパティ：クラスの中に定義された変数
- メソッド：クラスの中に定義された関数

## コンストラクタとはなにか、また、なぜ必要なのかを説明してください。
- メソッド(関数)のうちの１つ。実行タイミングがインスタンス化と同時である。
- インスタンス化と同時にプロパティに値を格納したいため。

## 下記コンストラクター内の2行が何をしているのか、また、なぜこの2行が必要なのか説明してください。
```
public function __construct($id, $name)
{
    $this->studentId = $id;
    $this->studentName = $name;
}
```
- クラスのプロパティのID、nameに定義した引数の値をセットする。
- プロパティに値を入れないと、学生のIDと名前が空のままインスタンスが作られてしまうため。



## クラスがなぜ必要なのか説明してください。
- 変数や関数を一つの設計図として定義しておくだけで、何度も同じ設計のインスタンスを作れるため。

## `DateTime::modify`メソッドの返り値を教えてください。
- DateTime オブジェクトのdateプロパティが変更されたオブジェクトを返します。失敗した場合に false を返します。

## `DateTime::format`メソッドと`DateInterval::format`メソッドの違いを教えてください。
- DateTime::format　日付と時刻を表す
現在の日時や指定した形式や曜日など表すことができる

- DateInterval::format　日付の間隔を表す
２つある日付けの差分を計算するのに長けているが、このインスタンスは＝＝や！＝＝と使用した比較ができない

## 下記コード3行目のformatメソッドの返り値をPHPのマニュアルから調べる手順を具体的に説明してください。
```
$now = new DateTime();
$prev = new DateTime('2000-1-1');
echo $prev->diff($now)->format('%a')
```

1. まず、上記のformatメソッドがどんなオブジェクトから呼ばれているかを調べるため、diffメソッドの返り値を調べます。
1. diffメソッドは変数$prevから呼ばれており、$prevにはDateTimeクラスからインスタンス化したオブジェクトが入っているので、 phpマニュアルにて、Datetimeクラスについて検索します。

1. phpマニュアルでDateTimeクラスのページにて、メソッド定義の中にdiffが記述されているので、そこから返り値を確認します。

`diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval`

1. 上記の返り値のデータ型の部分（`:`以下）が、dateIntervalクラスのページリンクになっていることから、diffメソッドの返り値がdateIntervalオブジェクトであることがわかります。

1. 返り値のリンクからdateIntervalクラスのページに遷移し、クラス概要のメソッドの中にformatメソッドをクリックします。

1. dateIntervalクラスのformatメソッドのページに遷移します。
    - 「説明」にて、返り値のデータ型がstring型であることが確認できます。
    - 「戻り値」にて、返り値についての詳細な説明を確認すると、「フォーマットされた間隔を返します。」とあります。

<!-- メモ：
$prev()->diff( )->format()
変数prev(datetimeオブジェクト)
メソッドdiff (返り値：dateIntervalオブジェクト）
 -->
