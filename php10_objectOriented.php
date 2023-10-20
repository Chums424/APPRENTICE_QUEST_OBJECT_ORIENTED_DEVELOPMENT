<?php

//ⅹ.[PHP][Level2]オブジェクト指向を使うことができる
//自動販売機のプログラムを書くクエスト

class Vendingmachine {
  private $manufacturerName;
  private $balance = 0;
  private $cupStock = 100;
  private $items = [];

  public function __construct($manufacturerName) {
    $this->manufacturerName = $manufacturerName;
  }

  public function depositCoin($amount) {
    if($amount == 100) {
      $this->balance += $amount;
    }
  }

  public function pressButton(Item $item) {
    if ($item instanceof Beverage) {
      if ($this->balance >= $item->getPrice()) {
        $this->balance -= $item->getPrice();
        return $item->getName();
      } else {
        return '';
      }
    } elseif ($item instanceof Snack) {
      if ($this->balance >= $item->getPrice() && $item->getStock() > 0) {
        $this->balance -= $item->getPrice();
        $item->reduceStock();
        return $item->getName();
      } else {
      return '';
      }
    }
  }

  public function addCup($count) {
    if ($count > 0) {
      $this->cupStock += $count;
      if ($this->cupStock > 100) {
        $this->cupStock = 100;
      }
    } 
  }

  public function addItem(Item $item) {
    $this->items[] = $item;
  }

  public function pressManufacturerName() {
    return $this-> manufacturerName;
  }
}

class Item {
  private $name;
  private $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  } 
}

class Beverage extends Item {
  public function __construct($name, $price) {
    parent::__construct($name, $price);
  }
}

class CupCoffee extends Beverage {
  public function __construct($type) {
    if ($type === 'hot') {
      parent::__construct('hot cup coffee', 100);
    } else {
      parent::__construct('ice cup coffee', 100);
    }
  }
}

class Snack extends Item {
  private $stock = 10;

  public function __construct() {
    parent::__construct('potato chips', 150);
  }

  public function getStock() {
    return $this->stock;
  }

  public function reduceStock() {
    if ($this->stock > 0) {
        $this->stock--;
    }
  }
}


$cider = new Beverage('cider', 100);
$hotCupCoffee = new CupCoffee('hot');
$snack = new Snack();

$vendingMachine = new VendingMachine('サントリー');
$vendingMachine->addItem($cider);
$vendingMachine->addItem($hotCupCoffee);
$vendingMachine->addItem($snack);

$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($cider); // cider

$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($hotCupCoffee); // 空文字
$vendingMachine->addCup(1);
echo $vendingMachine->pressButton($hotCupCoffee); // hot cup coffee

echo $vendingMachine->pressButton($snack); // potato chips
$vendingMachine->depositCoin(100);
$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($snack); // 空文字


?>