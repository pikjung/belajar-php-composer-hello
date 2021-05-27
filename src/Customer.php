<?php

namespace Fikri\Belajar;

/**
 *
 */
class Customer
{

  public $name;
  
  public function __construct($name)
  {

  }

  public function sayHello($name)
  {
    return "Hello $name, My name is $this->name";
  }
}


 ?>
