<?php
class customException extends Exception{
    public function errorMessage(){
        // error message
        $errMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-mail address';
        return $errMsg;
    }
}
$email = "abc@example...com";
try{
    if(filter_var($email, FILTER_VALIDATE_EMAIL)=== FALSE){
        // throw exception if email is not valid
        throw new customException($email);
    }
}
catch(customException $e){
    // display custom message
    echo $e->errorMessage();
    echo "<br>";
}
?>