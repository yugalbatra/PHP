<?php
$n=$_POST['n'];

for($i=0;$i<=$n;$i++)
{
    if($i%2==0)
    {echo ">>" ,$i;}
    echo "<br>";
}
?>