<?php 

class Review {
  private $menuName;
  // private $userName;  // レビューとレビューした人の情報を紐付けるプロパティ
  private $userId;  // レビューとレビュワーの情報を紐付けるプロパティ。$userNameだと同姓同名のユーザーを識別できないので。
  private $body;

  // コンストラクタ
  public function __construct($menuName, $userId, $body) {  // コンストラクタもuserName=>userIdに変更。
    $this->menuName = $menuName;
    $this->userId = $userId;
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
      // if ($user->getName() == $this->userName) {  // Userのユーザーネーム($name)とReviewのユーザーネーム($userName)が一致しているかどうか
      if ($user->getId() == $this->userId) {  // UserのユーザーID($user->getId())とReviewのユーザーID($this->userId)が一致しているかどうか(IDでの識別に変更)
        return $user;  // 一致していれば、$userを返す
      }
    }
  }

}

?>