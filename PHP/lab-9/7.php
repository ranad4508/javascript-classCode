<?php

#public class visibility
class demoClass{
    public $variable1;
    public $variable2;
    public function demoMethod(){
        echo " Public class: Inside demo ";
        echo $this->variable1;
    }
}
$ob = new demoClass();
$ob->variable1 = 8; // accessible from outside
$ob->demoMethod(); // public method of the demo class
echo "<br>";
?>