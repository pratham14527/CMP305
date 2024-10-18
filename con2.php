<?php
include "con1.php";
$q="insert into student(sid,sname,sadd)values(101,'abc','a1')";
$r=mysqli_query($con,$q);
if($r)
{
    echo "record inserted successfully";
}
?>