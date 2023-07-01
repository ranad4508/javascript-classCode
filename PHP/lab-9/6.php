<?php

class Animal {
    public function makeSound() {
        echo "Animal makes a sound.\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat meows.\n";
    }
}

// Creating objects of Animal, Cat, and Dog classes
$animal = new Animal();
$cat = new Cat();

// Calling the makeSound() method for each object
$animal->makeSound(); // Output: Animal makes a sound.
$cat->makeSound();    // Output: Cat meows.

?>
