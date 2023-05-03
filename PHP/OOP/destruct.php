<?php
Class SomeClass{
    public $name;    
    function __construct($name, ){
        echo "In constructor, ";
        $this->name = $name;
    }
    function __destruct(){
        echo "Destroying ".$this->name."<br>";
    }
}

$object = new SomeClass('Constructor 1');
?>