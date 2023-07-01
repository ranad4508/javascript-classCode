<!-- Private class -->
<?php
class Test{
    public $variable1;
    private $variable2;
    public function pubMethod($a){
        echo $a;
    }
    private function privMethod($b){
        echo $b;
    }
    public function pubPrivmethod(){
        $this->variable2 = 1;
        $this->privMethod(1);
    }
}
$objT = new Test();
$objT->variable1 = 3;
$objT->pubMethod("Private class: test");
// $objT->privMethod(1);
$objT->pubPrivmethod();
// $objT->variable2 = 1;
// gives fatal error as it is trying to access private class from outside the class 
?>