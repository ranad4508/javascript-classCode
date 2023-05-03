<?php
class Base{
    function display(){
        echo "<br>Base class function declared final!";
    }
    function demo(){
        echo "<br>Base class function!";
    }
}
class Derived extends Base{
    function demo(){
        echo "<br>Derived class function!";
    }

}
$ob = new Base();
$ob1 = new Derived();
$ob->demo();
$ob->display();
$ob1->demo();
$ob1->display();
?>