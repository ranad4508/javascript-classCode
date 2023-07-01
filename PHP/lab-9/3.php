<?php
class Employee{
    public $name;
    public $position;

    function __construct($name,$position){
        $this->name=$name;
        $this->position=$position;
    }
    function show_details(){
        echo $this->name." : ";
        echo "Your position is ".$this->position."<br>";
    }
}
$emp = new Employee("Zoro","The swordsman");
$emp->show_details();
?>

<?php
class Scripting{
    public $name;
    function __construct()
    {
        echo"In constructor, ";
        $this->name = "Class object! <br>";
    }
    function __destruct()
    {
        echo " Destroying ".$this->name."<br>";
    }
}
$Twice = new Scripting();
?>