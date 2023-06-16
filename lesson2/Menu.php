<?php


class Menu {
  // Drinkクラスでも使用するので、name, price, image, countを private => protectedへ変更
  protected $name;
  protected $price;
  protected $image;
  private $orderCount = 0;
  // クラスプロパティcountをprivateに
  protected static $count = 0;


  // コンストラクタに$price, $imageをもたせる
  public function __construct($name, $price, $image) {
    // 各プロパティに各引数を代入
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;

    // コンストラクタを使って$countの値を+1させる
    self::$count++;
  }


  // ゲッター
  public function getName() {
    return $this->name;
  }
  public function getImage() {
    return $this->image;
  }
  public function getOrderCount() {
    return $this->orderCount;
  }
  public static function getCount() {
    return self::$count;
  }

  // セッター
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }



  // 税込価格を返すメソッドを定義
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.1);
  }

  // 注文個数分の税込み合計価格を求めるメソッド
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }


  // $reviewsから特定の$review**を取り出せるようにするためのメソッド
  public function getReviews($reviews) {

    // 先に該当する$reviewを格納する配列$reviewsForMenuを空で定義
    $reviewsForMenu = array();
    
    // $reviewsに対して１つずつ処理をループ
    foreach($reviews as $review) {
      // $reviewsの各要素の商品名が、Menuのnameプロパティに該当するかどうかの条件分岐
      if($review->getMenuName() == $this->name) {
        $reviewsForMenu[] = $review;  // 該当したら$reviewsForMenuに代入
      }
    }
    // foreachが終わったら、$reviewsForMenuを返す。
    return $reviewsForMenu;
    
  }



  // show.php用 クエリ文字列から、クエリ文字列の商品名をプロパティとしてもつデータ($menus)をサーチする用のメソッド
  public static function findByName($menus, $name) {
    foreach($menus as $menu) {
      if($menu->getName() == $name) {
        return $menu;
      }
    }
  }


  


}

?>