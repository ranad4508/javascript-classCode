<!-- Protected Class -->

<?php
class parentDemo{
    protected $var1;
    public $var2;
    protected function demoParent(){
        echo "This is demo";
    }
}
class childDemo extends parentDemo{
    public function demoChild(){
        echo $this->demoParent();
    }
}
$objP = new parentDemo();
$objC = new childDemo();


// $objP->demoParent(); //throw error
$objC->demoChild();
?>