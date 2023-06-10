<?php


class Menu {
  public $name;
  // $price, $imageというプロパティを定義
  public $price;
  public $image;


  // コンストラクタに$price, $imageをもたせる
  public function __construct($name, $price, $image) {
    // 各プロパティに各引数を代入
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
}

?>