<?php
require_once('data.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <!-- 支払い金額の表示目的, $totalPayment -->
    <?php $totalPayment = 0; ?>

    <?php foreach ($menus as $menu): ?>
      <!-- 変数$orderCountを定義、$_POSTで受け取った値を代入 -->
      <?php
        $orderCount = $_POST[$menu->getName()];
        // $menuに注文個数をセットする
        $menu->setOrderCount($orderCount);
        // $totalPaymentに、$menuのgetTotalPrice()で得た値を足し合わせていく
        $totalPayment += $menu->getTotalPrice();
      ?>
      <p class="order-amount">
        <!-- ここに、$menuのゲッターを用いてnameプロパティを表示 -->
        <?php echo $menu->getName(); ?>
        x
        <!-- ここに、$orderCountを表示 -->
        <?php echo $orderCount; ?>
        個
      </p>
      <p class="order-price"><?php echo $menu->getTotalPrice(); ?> 円</p>
    <?php endforeach ?>
    <h3>合計金額：<?php echo $totalPayment; ?> 円</h3>
  </div>
</body>
</html>

