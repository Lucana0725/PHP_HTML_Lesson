<?php 
require_once('Menu.php');
require_once('Data.php');

$menuName = $_GET['name'];

// Menuに対してfindByName()を使用。引数は$menusとクエリ文字列で渡ってきた文字列$menuName。
$menu = Menu::findByName($menus, $menuName);
?>


<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper container">
    <!-- 商品画像 -->
    <img src="<?php echo $menu->getImage(); ?>" class="menu-item-image">

    <!-- 商品名 -->
    <h3 class="menu-item-name"><?php echo $menu->getName(); ?></h3>

    <!-- 商品ジャンルによって変化するタイプ -->
    <?php if($menu instanceof Drink): ?>
      <p class="menu-item-type"><?php echo $menu->getType(); ?></p>
    <?php else: ?>
      <?php for($i = 0; $i < $menu->getSpiciness(); $i++): ?>
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness'>
      <?php endfor ?>
    <?php endif ?>

    <!-- 価格 -->
    <p class="price">¥<?php $menu->getTaxIncludedPrice(); ?></p>
    <a href="index.php">← メニュー一覧へ</a>
  </div>

</body>
</html>