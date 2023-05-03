<?php

class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function details(){
        echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
    }
}

class Apple extends Fruit{
    public function intro(){
        echo 'Am i a fruit?';
    }
}
$fruit1 = new Apple('Apple', 'Red');
$fruit1->details();
$fruit1->intro();
?>