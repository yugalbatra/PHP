<?php
$str=$_POST['str'];

function Palindrome_check($str)
{
    $str1=strrev($str);
    if(strcmp($str,$str1)==0)
    {
        return "$str is a Palindrom String.";
    }
    else
    {
        "$str is not Palindrome String.";

    }
    
}

$p=Palindrome_check($str);

echo $p;
?>
