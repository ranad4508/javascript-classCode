<!--1. wap to show method overriding in OOP in php -->
<!--2. wap in php to upload a file given by user n a folder name documents -->
<!--3. wap in php to create a table in database named students with fields(id, name, address, email, image) and insert one adata in the table -->

<?php
class MethodOverringDemo{
    public $name;
    public $address;
    public $phone;
    public function Demo1($name, $address){
        echo "Name : {$this->name}, Address : {$this->address}<br>";
    }
    public function Demo1($name, $phone){
        echo "Name : {$this->name}, Phone : {$this->phone}<br>";
    }
}

$object = new MethodOverringDemo();
$object->name = 'Dinesh';
$object->address='Onigashima';
$object->phone = 9798798798;
$object->Demo1($object->name, $object->address);
$object->Demo1($object->name, $object->phone);
?>