<!-- Write an object oriented PHP program to implement the concept of 
inheritance in considering with following
class diagram . create at least 5 object for permanent. -->

<!-- 
    |---------------------|                                             
    |Employee             |
    |---------------------|
    |-name: String        |____
    |-address: String     | 
    |---------------------|
    |+setName()           |
    |+setAddress()        |
    -----------------------


    |---------------------|                                             
    |permanent            |
    |---------------------|
    |-salary: decimal     |
    |-post string         | 
    |---------------------|
    |+setSalary()         |
    |+setPost()           |
    |+displayAll()        |
    -----------------------
 -->


 <?php
 class Employee{
    public $name;
    public $address;
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function getAddress(){
        return $this->address;
    }
 }


 class Permanent extends Employee{
    public $salary;
    public $post;
    function setSalary($salary){
        $this->salary = $salary;
    }
    function getSalary(){
        return $this->salary;
    }
    function setPost($post){
        $this->post = $post;
    }
    function getPost(){
        return $this-> post;
    }

    function displayAll(){
        echo "Name : {$this->name}, Address : {$this->address},  Salary : {$this->salary}, Post : {$this->post}<br>";
    }
 }

 $emp1 = new Permanent();
 $emp1->setName('Dinesh');
 $emp1->setAddress('Lalitpur');
 $emp1->setSalary(100000000);
 $emp1->setPost('CEO');

 $emp1->getName();
 $emp1->getAddress();
 $emp1->getSalary();
 $emp1->getPost();
 $emp1->displayAll();

 $emp2 = new Permanent();
 $emp2->setName('Dinesh');
 $emp2->setAddress('Lalitpur');
 $emp2->setSalary(100000000);
 $emp2->setPost('CEO');

 $emp2->getName();
 $emp2->getAddress();
 $emp2->getSalary();
 $emp2->getPost();
 $emp2->displayAll();

 $emp3 = new Permanent();
 $emp3->setName('Dinesh');
 $emp3->setAddress('Lalitpur');
 $emp3->setSalary(100000000);
 $emp3->setPost('CEO');

 $emp3->getName();
 $emp3->getAddress();
 $emp3->getSalary();
 $emp3->getPost();
 $emp3->displayAll();

 $emp4 = new Permanent();
 $emp4->setName('Dinesh');
 $emp4->setAddress('Lalitpur');
 $emp4->setSalary(100000000);
 $emp4->setPost('CEO');

 $emp4->getName();
 $emp4->getAddress();
 $emp4->getSalary();
 $emp4->getPost();
 $emp4->displayAll();

 $emp5 = new Permanent();
 $emp5->setName('Dinesh');
 $emp5->setAddress('Lalitpur');
 $emp5->setSalary(100000000);
 $emp5->setPost('CEO');

 $emp5->getName();
 $emp5->getAddress();
 $emp5->getSalary();
 $emp5->getPost();
 $emp5->displayAll();
 ?>