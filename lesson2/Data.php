<?php
// require_once('Menu.php');
require_once('Drink.php');
require_once('Food.php');

// 各々price, imageの値をセット
$juice = new Drink('JUICE', 600, "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png");
$coffee = new Drink('COFFEE', 500, "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png");

// $juice, $coffeeに各々 アイス、ホット をセット
$juice->setType('アイス');
$coffee->setType('ホット');

// Drinkのtypeを呼び出すとバグるので一旦退避。修正後戻す
// $curry = new Food('CURRY', 900, "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png");
// $pasta = new Food('PASTA', 1200, "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png");


// 配列の中に上記の4つのインスタンスを順に入れて、変数$menusに代入
// $menus = array($juice, $coffee, $curry, $pasta);  // Drinkのtypeを呼び出すとバグるので一旦退避。修正後戻す
$menus = array($juice, $coffee);
?>