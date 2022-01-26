<?php

Class obldznik{
  public $a;
  public $b;

  public function __construct($a,$b){
    $this ->a=$a;
    $this ->b=$b;
    $
  }
  public function obsah(){
    return $this->a * $this ->b;
  }
}

$vysledok = new obldznik(5,8);

echo $vysledok->obsah();

?>
