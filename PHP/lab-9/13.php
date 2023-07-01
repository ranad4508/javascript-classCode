<?php
class customException1 extends Exception{
    public function errorMessage(){
        // error message
        $errMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-mail address';
        return $errMsg;
    }
}
$email = "abc@example.com";
try{
    if(filter_var($email, FILTER_VALIDATE_EMAIL)=== FALSE){
        // throw exception if email is not valid
        throw new customException1($email);
    }
    if(strpos($email,'example')!== FALSE){
        throw new Exception('$email is an example ');
    }
}
catch(customException1 $e){
    // display custom message
    echo $e->errorMessage();
    echo "<br>";
}
catch(customException1 $e){
    echo $e->getMessage();
    echo "<br>";
}
?>