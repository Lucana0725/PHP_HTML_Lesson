<?php
class Menu {
  public $name;

  public function hello() {
    // echo "私はMenuクラスのインスタンスです";
    // 私は**です とechoする
    echo "私は{$this->name}です";
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