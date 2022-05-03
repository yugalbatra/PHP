<?php
$str1=$_POST['str1'];
$str2=$_POST['str2'];

$b=preg_match("/$str2/i",$str1);

if($b)
{
    echo "'$str1' contains substring '$str2'";
}

else
{
    echo "'$str1' does not contain substring '$str2'";
}
?>
