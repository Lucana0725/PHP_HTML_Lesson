<?php
require_once('Menu.php');

$juice = new Menu('JUICE');
$coffee = new Menu('COFFEE');
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

// 配列の中に上記の4つのインスタンスを順に入れて、変数$menusに代入
$menus = array($juice, $coffee, $curry, $pasta);
?>