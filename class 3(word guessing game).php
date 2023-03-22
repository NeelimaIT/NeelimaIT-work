<?php

$word = 'ddd';
$Shuffle = str_shuffle($word);
//echo $afterSuffle;
if($Shuffle === 'ddd')
{
echo "Excellent";
}
else
{
    echo "OOps,sorry..Not matched";
}
?>

<?php




echo "<br>";

$word = 'headache';
$Shuffle = str_shuffle($word);

if($Shuffle === 'achehead')
{
echo "Good Job";
}
else
{
    echo "Ummm,,,,try again";
}
?>