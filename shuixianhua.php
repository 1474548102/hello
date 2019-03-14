<?php

function str($str){
$arr=[];
$len=strlen($str);
$sum=0;
for($i=0;$i<$len;$i++)
{
	$arr[$i]=substr($str, $i,1);
    $sum+=pow($arr[$i],$len);
}
 
 if($sum==$str)
 {
 	echo "水仙花";
 }
 else
 {
 	echo "不是";
 }
}
$str=153;
echo str($str);
?>