<?php 

class Review {
  private $menuName;
  private $userName;  // レビューとレビューした人の情報を紐付けるプロパティ
  private $body;

  // コンストラクタ
  public function __construct($menuName, $userName, $body) {
    $this->menuName = $menuName;
    $this->userName = $userName;
    $this->body = $body;
  }

  // 各ゲッター
  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }


  // レビューとレビュワーを紐付けるメソッド
  public function getUser($users) {
    foreach ($users as $user) {
      if ($user->getName() == $this->userName) {  // Userのユーザーネーム($name)とReviewのユーザーネーム($userName)が一致しているかどうか
        return $user;  // 一致していれば、$userを返す
      }
    }
  }

}

?>