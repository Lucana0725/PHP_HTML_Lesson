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

    <h3>メニュー：<?php echo Menu::$count; ?>品</h3>
    
    <!-- formタグの追加 -->
    <form action="confirm.php" method="post">
      <div class="menu-items">
        
      <?php foreach ($menus as $menu): ?>
        <div class="menu-item">
          <!-- imgタグで画像を表示(ゲッターを使って) -->
          <img src="<?php echo $menu->getImage(); ?>">
          <!-- ゲッターを使って名前を表示 -->
          <h3><?php echo $menu->getName(); ?></h3>
          <!-- pタグの中に価格を表示 -->
          <p class="price">¥<?php echo $menu->getTaxIncludedPrice(); ?>(税込み)</p>
          <!-- inputを使って入力ボックスの準備 -->
          <input type="text" value="0" name="<?php echo $menu->getName(); ?>">
          <span>個</span>
        </div>
        <?php endforeach ?>
        
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
