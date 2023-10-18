<?php

//ⅹ.[PHP][Level2]オブジェクト指向を使うことができる
//自動販売機のプログラムを書くクエスト


//VendingMachine クラスを宣言
class VendingMachine {
  private $manufacturerName;

  //コンストラクタメソッドを追加
  public function __construct($manufacturerName) {
    $this->manufacturerName = $manufacturerName;
  }

  //pressButton メソッドを定義
  public function pressButton() {
    return 'cider';
  }

  //pressManufacturerName メソッドを追加
  public function pressManufacturerName() {
    return $this->manufacturerName;
  }
}


//VendingMachine クラスのインスタンスを生成
$vendingMachine = new VendingMachine();

//pressButton メソッドを呼び出して 'cider' の文字列を取得し、出力
echo $vendingMachine->pressButton();

//自動販売機のメーカー名を指定してインスタンスを生成
$vendingMachine = new VendingMachine('サントリー');

//pressManufacturerName メソッドを呼び出してメーカー名を取得し、出力
echo $vendingMachine->pressManufacturerName();


?>