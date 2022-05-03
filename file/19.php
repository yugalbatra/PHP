<?php

$str=$_POST['str'];
$str1=str_replace("The","That",$str,$i);

echo "<br>";
echo "$str1";
echo "<br>";
echo "$i replacements.";
echo "<br><br>";

$str1=str_ireplace("The","That",$str,$i);

echo "$str1";
echo "<br>";
echo "$i replacements.";
echo "<br><br>";

?>
