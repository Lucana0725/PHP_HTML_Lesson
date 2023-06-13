<?php


class Menu {
  private $name;
  // $price, $imageというプロパティを定義
  private $price;
  private $image;
  private $orderCount = 0;


  // コンストラクタに$price, $imageをもたせる
  public function __construct($name, $price, $image) {
    // 各プロパティに各引数を代入
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }

  // 税込価格を返すメソッドを定義
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.1);
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

}

?>