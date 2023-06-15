<?php
require_once('Menu.php');

class Drink extends Menu {
  // 飲み物用のtypeというプロパティを定義(独自プロパティ)
  private $type;

  // コンストラクタ
  public function __construct($name, $price, $image, $type) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->type = $type;

    // コンストラクタを使って$countの値を+1させる
    self::$count++;
  }

  // type取得用getTypeメソッド
  public function getType() {
    return $this->type;
  }

  // typeセット用setTypeメソッド
  public function setType($type) {
    $this->type = $type;
  }


}

?>