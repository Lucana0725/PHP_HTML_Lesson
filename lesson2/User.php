<?php

class User {
  private $id;  // ユーザーごとにidをもたせることで同姓同名のユーザーでも識別できるようにする
  private $name;
  private $gender;
  private static $count;  // $countをクラスプロパティ(static)にする

  // コンストラクタ
  public function __construct($name, $gender) {
    $this->name = $name;
    $this->gender = $gender;

    self::$count++;  // コンストラクタがはたらく度に$countを+1する(インスタンスが生成されるたびにidが1, 2, ...となる。)
    $this->id = self::$count;  // self::$count++;で値を増やしたidを$idがもつようにする。
  }

  // ゲッター
  public function getId() {
    return $this->id;
  }
  public function getName() {
    return $this->name;
  }
  public function getGender() {
    return $this->gender;
  }
}

?>