<?php
require_once('Menu.php');

class Drink extends Menu {
  // 飲み物用のtypeというプロパティを定義(独自プロパティ)
  private $type;

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