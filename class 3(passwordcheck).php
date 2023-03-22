
<?php

$password = '1234@09093';
$Length = strlen($password);
if($Length >= 6)
{
    if($Length <= 8)
    {
        echo "Normal password (6 to 8)";
    }
    else
    {
        echo "error!! too long paasword";
    }
}
else
{
    echo "error!! too short paasword";
}
?>