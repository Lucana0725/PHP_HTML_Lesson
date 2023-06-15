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



}

?>