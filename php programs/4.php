<?php
$s=$_POST['s'];

function reverse_string($s)
{
    return strrev($s);
}

echo reverse_string($s);
?>