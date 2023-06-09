<?php


class Menu {
  public $name;

  // コンストラクタが$nameを取れるよう処理
  public function __construct($name) {
    // nameプロパティに引数の$nameを代入
    $this->name = $name;
  }


  public function hello() {
    echo "私は{$this->name}です";
  }

}

?>