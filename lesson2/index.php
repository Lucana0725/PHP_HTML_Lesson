<?php
class Menu {
  public $name;

  // コンストラクタの定義
  public function __construct() {
    echo "1つのメニューが作られました";
  }


  public function hello() {
    echo "私は{$this->name}です";
  }

}
// Menuクラスのインスタンスの作成、各変数へ
$curry = new Menu();
echo '<br>';
$pasta = new Menu();
// 各変数のnameプロパティに対して値をセット
$curry->name = "CURRY";
echo '<br>';
$pasta->name = "PASTA";
// 各インスタンスに対してhelloメソッドを呼び出し
$curry->hello();
echo '<br>';
$pasta->hello();
?>