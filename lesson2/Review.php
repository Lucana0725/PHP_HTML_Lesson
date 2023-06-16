<?php 

class Review {
  private $menuName;
  private $body;

  // コンストラクタ
  public function __construct($menuName, $body) {
    $this->menuName = $menuName;
    $this->body = $body;
  }

  // 各ゲッター
  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }

}

?>