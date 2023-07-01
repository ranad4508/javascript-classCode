<?php
class MyClass {
    public function __construct() {
        echo "Object created.\n";
    }

    public function __destruct() {
        echo "Object destroyed.\n";
    }
}

// Creating an object of MyClass
$object = new MyClass();

// Unsetting the variable to remove the reference to the object
unset($object);

// The object will be destroyed automatically if there are no other references to it
?>