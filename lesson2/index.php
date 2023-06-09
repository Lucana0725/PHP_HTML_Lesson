<?php
// Menuクラスの作成
class Menu {
  // nameプロパティを作成
  public $name;

}
// Menuクラスのインスタンスの作成、各変数へ
$curry = new Menu();
$pasta = new Menu();

// 各変数のnameプロパティに対して値をセット
$curry->name = "CURRY";
$pasta->name = "PASTA";

// 各nameプロパティをechoする
echo $curry->name;
echo '<br>';
echo $pasta->name;

?>