<?php
$rand =rand(1,10);
$guess= $_GET['guess'];
$submit= $_GET['submit'];

if (isset($submit)) {
    if($guess<1 || $guess>10){
        echo "The guess must be between 1 to 10!";
    }
    else{
        if($guess!=$rand){
            echo"Incorrect,The correct answer is ".$rand;
        }else {
            echo "That is correct!";
    }
}
}



?>