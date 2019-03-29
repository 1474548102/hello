<?php

function str($str)
{
    $len=strlen($str);
    
   if(0 <= $len && $len<=10000)
   {
      for ($i=0; $i < $len; $i++) { 
            
            $num=substr_count($str, $str[$i]);

            if($num==1)
            {
                return $i+1;
            }
      }
   }

   return -1;
}

$str='AAbbCCff';

echo str($str);
?>