<?php

$n=$_POST['n'];

function fibonacci($n)
{
    if($n==1)
    {
        return 1;
    }
    if($n==2)
    {
        return 1;
    }
    return fibonacci($n-2)+fibonacci($n-1);
}

for($i=1;$i<=$n;$i++)
{
    echo fibonacci($i). " ";
}
?>