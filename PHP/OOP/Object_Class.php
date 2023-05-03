<?php
class Fruit{
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
echo "Fruit name is: ".$apple->get_name();

$apple->set_color('red');
echo "<br>Fruit color is: ".$apple->get_color();

?>