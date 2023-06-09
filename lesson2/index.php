<?php
// Menuクラスの作成
class Menu {
  // nameプロパティを作成
  public $name;

  // helloメソッドを定義
  public function hello() {
    echo "私はMenuクラスのインスタンスです";
  }

}
// Menuクラスのインスタンスの作成、各変数へ
$curry = new Menu();
$pasta = new Menu();
// 各変数のnameプロパティに対して値をセット
$curry->name = "CURRY";
$pasta->name = "PASTA";

// 各インスタンスに対してhelloメソッドを呼び出し
$curry->hello();
echo '<br>';
$pasta->hello();
?>