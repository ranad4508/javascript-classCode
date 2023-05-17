<!-- 1. wap in php to display records from a table using ajax and mysql -->
<!-- 2. wap in php to handle an exception when user gives empty value in a text box for name -->
<!-- 3. explain different types of visibility in php class  -->
<!-- 4. wap a php program to set and destroy a session -->
<!-- 5. wap a php program to demonstrate the concept of aggregate function in mysql -->

<!-- question-2:  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="name" id="name"><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    function checkInput(){
        try{
            if(empty($name)){
                throw new Exception( "name is empty");
            }
        }
       catch(Exception $e){
        echo "<b>Message: </b>".$e->getMessage();
       }
    }
    checkInput();
}
?>

<!-- Question-2: -->
<?php
class PublicDemo{
    public $name;
    public $address;
    private $phone;
    public function display($name,$address){
        echo "Name : {$this->name} and address: {$this->address}, <br>";
    }
    private function privMethod($phone){
        echo "phone {$this->phone}";
    }

}

$object1 = new PublicDemo();
$object1->name="Dinesh";
$object1->address="Lalitpur";
$object1->phone = '0998987999';
$object1->privMethod($object1->phone);

$object1->display($object1->name, $object1->address);


?>