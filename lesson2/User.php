<?php

class User {
  private $name;
  private $gender;

  // コンストラクタ
  public function __construct($name, $gender) {
    $this->name = $name;
    $this->gender = $gender;
  }

  // ゲッター
  public function getName() {
    return $this->name;
  }
  public function getGender() {
    return $this->gender;
  }
}

?>