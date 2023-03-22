<?php

$email= 'nasringmail.com';
if(strpos($email,'@')){


    if(strpos($email, '.com')){
   echo "This seems to be valid";
}else{
    echo "Without .com email is invalid";
}

}else{ echo "enter the @ sign";
}

?>