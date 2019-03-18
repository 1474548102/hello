<?php
//1-100的和

//1
function yi($m)
{
	$sum=0;
   for($i=1;$i<=100;$i++)
   {
      $sum+=$i;
   }
   return $sum;
}
$m=100;
echo yi($m);
echo "<br>";
//2
function er($m)
{
	$sum=0;
	$sum=$m/2*(1+$m);
	return $sum;
}
$m=100;
echo er($m);
echo "<br>";
//3

function san($m)
{
  $sum=0;
  if($m==1)
  {
  	return $m;
  }
  else
  {
  	$sum=$m+=san($m-1);
  }
  return $sum;
}
$m=100;
echo san($m);
?>