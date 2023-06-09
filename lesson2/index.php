<?php
class Menu {
  public $name;

  // コンストラクタが$nameを取れるよう処理
  public function __construct($name) {
    // nameプロパティに引数の$nameを代入
    $this->name = $name;
  }


  public function hello() {
    echo "私は{$this->name}です";
  }

}
// new Menuの引数に'CURRY', 'PASTA'を代入
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

// 各インスタンスに対してhelloメソッドを呼び出し
// $curry->hello();
// echo '<br>';
// $pasta->hello();
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <div class="menu-items">
      <!-- 配列$menusの要素を変数$menuとするforeach文を書いてください -->
      
      
    </div>
  </div>
</body>
</html>
