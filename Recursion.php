<?php
//Youtube tutorial link:
//https://www.youtube.com/watch?v=LteNqj4DFD8
function Process($a){
    //Base case
    if($a === 5){
        return "Yes";
    }
    //What is being searched for not found or no more
    //checks to go through
    elseif($a>5){
        return "The number doesn't exist";
    }
    //Recussion call to itself
    else{
        return Process($a+1);
    }
}
$Resutls = Process(9);
var_dump($Resutls);
?>

