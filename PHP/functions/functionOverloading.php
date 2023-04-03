<?php
//php doesot support function overloading
function sum($a, $b){
    return $a+$b;
}
// function sum($a, $b, $c){
//     $sum=$a+$b+$c;
//     return $sum;
// }
echo sum(10, 20);
// echo sum(10, 20, 20);

?>