<?php
$str=$_POST['str'];

echo "Before: ",$str;
echo "<br><br>";

echo "After: ";
$arr=explode(" ",$str);
echo implode("",$arr);

echo "<br>";

?>
