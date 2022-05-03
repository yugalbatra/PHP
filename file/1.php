<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];


function gr($n1,$n2,$n3)
{
    if($n1>$n2 && $n1>$n3)
       return $n1;
    else
     if($n2>$n1 && $n2>$n3)
       return $n2;
    else
       return $n3;
}

echo "Largest Number out of 3 is: " .gr($n1,$n2,$n3);
?>