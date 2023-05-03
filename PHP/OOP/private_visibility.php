<?php
class privateVisibility{
    public $variable1;
    private $variable2;
    public function pubVisibility($a){
        echo $a;
    }
    private function privVisibility($b){
        echo $b;
    }

    public function pubprivMethod(){
        $this->variable2 = 1;
        $this->privVisibility(1);
    }
}
$object = new privateVisibility();
$object->variable1 = 3;
// $object->variable2 = 5;   private visibility is not accesible outside of that class
$object->pubVisibility(3);
$object->pubprivMethod();
?>