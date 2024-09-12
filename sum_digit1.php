<?php
//123=1+2+3=6
$n=123;
$sum=0;
for($i=0;$i<=strlen($n);$i++)
{
    $rem=$n%10;
    $sum=$sum+$rem;
    $n=$n/10;
}
echo "sum of digit=".$sum;
?>