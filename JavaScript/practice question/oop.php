<?php
class employee
{
    public $name;
    public $address;

    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }


    function set_address($address)
    {
        $this->address = $address;
    }
    function get_address()
    {
        return $this->address;
    }

}

class permanent extends employee
{
    public $salary;
    public $post;

    function set_salary($salary)
    {
        $this->salary = $salary;
    }
    function get_salary()
    {
        return $this->salary;
    }


    function set_post($post)
    {
        $this->post = $post;
    }
    function get_post()
    {
        return $this->post;
    }

}
$class1 = new employee();
$class1->set_name("Roshni");
$class1->set_address("koteshwor");

$class2 = new permanent();
$class2->set_salary(200000.00);
$class2->set_post("Dancer");

echo "Name: " . $class1->get_name();
echo "Salary: " . $class2->get_salary();
echo "Address: " . $class1->get_address();
echo "Post: " . $class2->get_post();


?>