<?php
function cariPasangan($array)
{
  $array_temp = array();

   foreach($array as $val)
   {
     if (!in_array($val, $array_temp))
     {
       $array_temp[] = $val;
     }
     else
     {
       echo 'array yang berpasangan = ' . $val . ' ';
     }
   }
}


$array = array(5,13,7,5,9,20,9,14);
cariPasangan($array);
?>
