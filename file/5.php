<?php
$str=$_POST['str'];

$str1=strtolower($str);

echo"<br>";

if(strcmp($str,$str1)==0)
{
    echo " $str is in lower case.";
}
else
{
    echo "$str is not in lower case.";
}
?>
