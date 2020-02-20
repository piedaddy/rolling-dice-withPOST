<?php

class Dice 
{
  public $value = null; 
  public $num_of_sides = null;
 
  public function __construct($num_of_sides=6){
    $this->num_of_sides = $num_of_sides;
  }


  public function roll(){
    $this->value = rand(1,$this->num_of_sides);
  }


  public function __toString(){
    return '<div class="di">' .$this->value . '</div>'; 

    //echoing means using as a string

  }

}
