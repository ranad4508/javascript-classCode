<?php
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}";
    }
}
class Grape extends Fruit{
    public function show(){
        echo "This is grape";
    }
}
$ff = new Grape("Grapes","green");
$ff->show();
$ff->intro();
?>