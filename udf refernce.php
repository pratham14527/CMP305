<?php
function abc(&$s)
{
    $s.="good morning";
}
$x="hello everyone";
abc($x);
echo $x;
?>