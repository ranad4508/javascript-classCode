<?php
class customException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = 'Error on line' . $this->getLine() . ' in ' . $this->getFile() . ' : <b>' . $this->getMessage() . '</b> is not a valid email address';
        return $errorMsg;
    }
}
$email = "abc@example.com";
try {
    //check if
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception is email is not valid
        throw new Exception($email);
    }
    if (strpos($email, "example") !== FALSE) {
        throw new Exception('$email is an example email');
    }
} catch (customException $e) {
    //display custom message
    echo "Message: " . $e->errorMessage();
}
?>