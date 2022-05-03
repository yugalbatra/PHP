<?php

$n=$_POST['n'];

function prime_check($n)
{
    $count=0;
    for($i=2;$i<$n;$i++)
    {
        if($n%$i==0)
        {
            $count++;
        }
    }
    return $count;
}

$p=prime_check($n);
if($p==0)
{
    echo "Number is Prime";

}
else
{
    echo "Number is not Prime";
}
?>