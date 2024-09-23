<?php
//first way
$sdata=array("sid"=>101,"sname"=>"pratham","sadd"=>"akota");
echo $sdata["sid"]."<br>";
echo $sdata["sname"]."<br>";
echo $sdata["sadd"]."<br>";
//second way
$edata["eid"]=101;
$edata["dept"]="sales";
$edata["salary"]=25000;
echo"eid=".$edata["eid"]."<br>";
echo"department=".$edata["dept"]."<br>";
echo"salary=".$edata["salary"]."<br>";
?>