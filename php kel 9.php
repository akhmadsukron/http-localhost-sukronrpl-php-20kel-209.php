<?php

class komputer{

  public $prosesor;
  public $memory;

  public function __construct($prosesor="Prosesor", $memory = "12 Gb"){
    $this->prosesor = $prosesor;
    $this->memory = $memory;
  }
    public function say(){
    echo "Kalimat ini berasal dari method say";
  }
  public function __destruct(){
    echo "Kalimat ini berasal dari destructor";
  }
}
   $komputerSaya = new komputer();

   echo $komputerSaya -> say();
   echo "<br>";


 ?>