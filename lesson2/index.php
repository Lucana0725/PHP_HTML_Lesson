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

    <h3>メニュー：<?php echo Menu::getCount(); ?>品</h3>
    
    <!-- formタグの追加 -->
    <form action="confirm.php" method="post">
      <div class="menu-items">
        
      <?php foreach ($menus as $menu): ?>
        <div class="menu-item">
          <!-- imgタグで画像を表示(ゲッターを使って) -->
          <img src="<?php echo $menu->getImage(); ?>">
          
          <!-- 名前にリンクを埋め込む（クエリ文字を使って商品データを渡せるようにする） -->
          <a href="show.php?name=<?php echo $menu->getName(); ?>">
            <!-- ゲッターを使って名前を表示 -->
            <h3><?php echo $menu->getName(); ?></h3>
          </a>
          
          <!-- 飲み物のタイプを表示(if, instanceofを使ってDrinkクラスのもののときのみ実行) -->
          <?php if($menu instanceof Drink): ?>
            <p class="menu-item-type"><?php echo $menu->getType(); ?></p>
          <?php else: ?>
            <?php for($i = 0; $i < $menu->getSpiciness(); $i++): ?>
              <img class="icon-spiciness" src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png">
            <?php endfor ?>
          <?php endif ?>

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
