<?php
// require_once('Menu.php');
require_once('Drink.php');
require_once('Food.php');
require_once('Review.php');

// 各々price, imageの値をセット
$juice = new Drink('JUICE', 600, "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png", 'アイス');
$coffee = new Drink('COFFEE', 500, "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png", 'ホット');
$curry = new Food('CURRY', 900, "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png", 3);
$pasta = new Food('PASTA', 1200, "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png", 1);


// 配列の中に上記の4つのインスタンスを順に入れて、変数$menusに代入
$menus = array($juice, $coffee, $curry, $pasta);


// レビュー用のreviewインスタンス
$review1 = new Review($juice->getName(), '果肉たっぷりのオレンジジュースです！');
$review2 = new Review($curry->getName(), '具がゴロゴロしていてとてもおいしいです');

// review用の配列
$reviews = array($review1, $review2);

?>