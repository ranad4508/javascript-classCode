<?php

class Student {
    private $name;
    private $section;
    private $faculty;
    
    public function set($name, $section, $faculty) {
        $this->name = $name;
        $this->section = $section;
        $this->faculty = $faculty;
    }
    
    public function get() {
        return [
            'name' => $this->name,
            'section' => $this->section,
            'faculty' => $this->faculty
        ];
    }
    
    public function welcomeMessage() {
        echo "Welcome, " . $this->name ."<br>";
    }
}

// Creating multiple objects of the Student class
$student1 = new Student();
$student1->set("John Doe", "A", "Science");
$student1->welcomeMessage();

echo "\n";

$student2 = new Student();
$student2->set("Jane Smith", "B", "Arts");
$student2->welcomeMessage();

?>
