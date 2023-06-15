<?php


class Menu {
  private $name;
  // $price, $imageというプロパティを定義
  private $price;
  private $image;
  private $orderCount = 0;
  // $countというpublicなクラスプロパティを初期値4で定義
  public static $count = 4;


  // コンストラクタに$price, $imageをもたせる
  public function __construct($name, $price, $image) {
    // 各プロパティに各引数を代入
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
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