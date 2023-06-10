<?php
require_once('Data.php');



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
      <?php foreach ($menus as $menu): ?>
        <div class="menu-item">
          <!-- imgタグで画像を表示 -->
          <img src="<?php echo $menu->image; ?>">
          <h3><?php echo $menu->name; ?></h3>
          <!-- pタグの中に価格を表示 -->
          <p class="price"><?php echo $menu->price; ?></p>
        </div>
      <?php endforeach ?>
      
    </div>
  </div>
</body>
</html>
