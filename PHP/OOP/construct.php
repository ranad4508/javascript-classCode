<?php
Class Emplooyee{
    public $name;
    public $position;
    function __construct($name, $position){
        $this->name = $name;
        $this->position = $position;
    }
    function showDetails(){
        echo "<br>Your name is : ".$this->name;
        echo "<br>Your Position is : ".$this->position;
    }
}

$emp1 = new Emplooyee('Dinesh', 'CEO');
$emp2 = new Emplooyee('Roshnee', 'Managing Director');
$emp1->showDetails();
$emp2->showDetails();
?>