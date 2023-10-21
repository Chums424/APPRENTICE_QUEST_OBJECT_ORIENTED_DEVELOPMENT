<?php

//ⅺ.[PHP][Level2]継承を使うことができる
/*1. 抽象クラス
抽象クラスを継承する実装を行う。*/

// 実装例１：
abstract class AbstractAnimal 
{
  private $name = "";

  public function getName(): String
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  abstract public function call(): string; 
}

class Cat extends AbstractAnimal
{
  public function call(): String
  {
    return "にゃーん";
  }
}

$pet = new Cat();
$pet->setName("たま");
print($pet->getName()."の鳴き声は".$pet->call());

echo "<br>";

// 実装例２：
abstract class AbstractShape
{
  abstract public function area(); // 抽象メソッド：具体的な図形クラスで実装が必要

  public function printArea() // 共通のメソッド
  {
    echo '面積:' . $this->area() . ' 平方単位';
  }
}

class Circle extends AbstractShape
{
  private $radius;

  public function __construct($radius) 
  {
    $this->radius = $radius;
  }

  public function area() 
  {
    return pi() * $this->radius * $this->radius;
  }
}

class Rectangle extends AbstractShape 
{
  private $width;
  private $height;

  public function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function area()
  {
    return $this->width * $this->height;
  }
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

$circle->printArea();
echo "<br>";
$rectangle->printArea();

echo "<br>";

/*2. インターフェース 
インターフェースの実装を行う。*/

interface AnimalInterface
{
  public function getName(): string;
  public function call(): string;
  public function eat(): void;
}

class Dog implements AnimalInterface
{
  public function getName(): String
  {
    return "ココア";
  }

  public function call(): String
  {
    return "わんわん！";
  }

  public function eat(): void {}
}

$dog = new Dog();
$name = $dog->getName();
echo "名前： $name\n";

$call = $dog->call();
echo "鳴き声： $call\n";


?>