<?php
class demoClass{
    public $variable1;
    public $variable2;
    public function demoMethod(){
        echo "<br>This is inside the demo class<br>";
        echo "The variable 1 is ".$this->variable1;
        echo "<br>The variable 2 is ".$this->variable2;
    }
}

$object = new demoClass();
$object->variable1 = 10;
$object->variable2 = 20;
$object->demoMethod();
?>