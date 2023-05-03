<?php
class Human{
    public $name;
    public $profession;
    public $gender;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_profession($profession){
        $this->profession = $profession;
    }
    function get_profession(){
        return $this->profession;
    }
    function set_gender($gender){
        $this->gender = $gender;
    }
    function get_gender(){
        return $this->gender;
    }
}

$person1 = new Human();
$person1->set_name('Dinesh');
$person1->set_profession('Student');
$person1->set_gender('Male');

$person2 = new Human();
$person2->set_name('Bibek');
$person2->set_profession('Student');
$person2->set_gender('Male');


$person3 = new Human();
$person3->set_name('Roshni');
$person3->set_profession('Student');
$person3->set_gender('Female');


echo "<table border='1px solid'>";

echo "<tr>";
echo "<td>Name</td> ";
echo "<td>Profession</td> ";
echo "<td>Gender</td> ";
echo "</tr>";

echo "<tr>";
echo "<td>".$person1->get_name()."</td>";
echo "<td>".$person1->get_profession()."</td>";
echo "<td>".$person1->get_gender()."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".$person2->get_name()."</td>";
echo "<td>".$person2->get_profession()."</td>";
echo "<td>".$person2->get_gender()."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>".$person3->get_name()."</td>";
echo "<td>".$person3->get_profession()."</td>";
echo "<td>".$person3->get_gender()."</td>";
echo "</tr>";

echo "</table>";
?>