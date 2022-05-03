<?php

$n=$_POST['n'];

function factorial($n)
{
   $fac=1;
   for($i=1;$i<=$n;$i++)
   {
       $fac=$fac*$i;
   }
   return $fac;
}

echo factorial($n);
?>
