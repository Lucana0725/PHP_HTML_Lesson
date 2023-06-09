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
// new Menuの引数に'CURRY', 'PASTA'を代入
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

// 各インスタンスに対してhelloメソッドを呼び出し
// $curry->hello();
// echo '<br>';
// $pasta->hello();
?>

<!-- 各<p>の中で各インスタンスのnameプロパティを呼び出す -->
<p><?php echo $curry->name; ?></p>
<p><?php echo $pasta->name; ?></p>