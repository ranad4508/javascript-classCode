<?php
function checkNum($number){
    if($number>1){
        throw new Exception('Value must be 1 or below');
    }
    return true;
}

//trigger exception in try block
try{
    checkNum(2);
    //if the exception is thrown, this text is not shown
    echo "If you see this, the number is 1 or below";
}

//catch exception in catch block
catch(Exception $e){
    echo "Message: ".$e->getMessage();
}
?>