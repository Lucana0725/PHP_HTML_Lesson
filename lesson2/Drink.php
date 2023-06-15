<?php
require_once('Menu.php');

class Drink extends Menu {
  // 飲み物用のtypeというプロパティを定義(独自プロパティ)
  private $type;

  // コンストラクタ
  public function __construct($name, $price, $image, $type) {
    // 親クラスMenuとの重複を削るためにparent::を導入
    parent::__construct($name, $price, $image);
    $this->type = $type;
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