<?php
$savings =100000;
$withdraw=20000;
if($withdraw<=$savings){
    $Requiredbalance=$savings-$withdraw;
    echo" $Requiredbalance";
}
else{
    echo" Balance is short";
}

?>
