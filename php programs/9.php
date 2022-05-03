<?php
$n=$_POST['n'];

$sum=0;
$j=1;

for($i=1;$i<=$n;$i++)
{
    $sum=$sum+$j;
    $j+=2;
}

echo "Sum of first" .$n. "odd numbers: " .$sum;
?>
