
//* If else Condition
<?php
function greaternum($p,$q,$r,$s){
    if($p>$q && $p>$r && $p>$s){
        echo "$p will be the greater one";
    }
    elseif($q>$p && $q>$r && $q>$s ){
            echo "$q will be the greater one";
        }
         elseif($r>$p && $r>$q && $r>$s ){
            echo "$r will be the greater one";
        }
        else{
            echo" $s will be the greater one";
        }
    }
    greaternum(100,220,190,490);
?>

//*switch case

<?php
$lotterynum=10;
switch($lotterynum)
{
case 1:echo"You May won the lottery";
break;
case 2:echo" You missed it for one digit only";
break;
default:echo" Sorry,it was not your day";
}
?>
