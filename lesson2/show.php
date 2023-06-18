<?php 
require_once('Menu.php');
require_once('Data.php');

$menuName = $_GET['name'];

// Menuに対してfindByName()を使用。引数は$menusとクエリ文字列で渡ってきた文字列$menuName。
$menu = Menu::findByName($menus, $menuName);

// $menuに対して$reviewsを引数にgetReviewsメソッドを呼び出す
$menuReviews = $menu->getReviews($reviews);
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
  <div class="review-wrapper">
    <div class="review-menu-item">
      <!-- 商品画像 -->
      <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
      <!-- 商品名 -->
      <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
  
      <!-- 商品タイプ -->
      <?php if ($menu instanceof Drink): ?>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
      <?php else: ?>
        <?php for ($i = 0; $i < $menu->getSpiciness(); $i++): ?>
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness'>
        <?php endfor ?>
      <?php endif ?>
      
      <!-- 価格 -->
      <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?></p>
    </div>
    
    <!-- レビュー -->
    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class='icon-review'>
          <h4>レビュー一覧</h4>
        </div>
        <!-- foreachでレビューを回す(元の$reviewsを$menuReviewsに書き換え) -->
        <?php foreach($menuReviews as $review): ?>
          <!-- $reviewに対して$usersを引数にgetUser()を呼び出し。 -->
          <?php $user = $review->getUser($users); ?>
          <div class="review-list-item">
            <div class="review-user">
              <?php if($user->getGender() == 'male'): ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/male.png" class='icon-user'>
              <?php else: ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/female.png" class='icon-user'>
              <?php endif ?>
              <p><?php echo $user->getName(); ?></p>
            </div>
            <p class="review-text"><?php echo $review->getBody(); ?></p>
          </div>
        <?php endforeach ?>
        
      </div>
    </div>
    <a href="index.php">← メニュー一覧へ</a>
  </div>
</body>
</html>