<?php
# Cho 1 mảng gồm n phần tử là các số nguyên, 

// Max
function getMax($array)
{
   $n = count($array);
   $vtmax="";
   $vtm =0;
   $max = $array[0];
   for ($i = 1; $i < $n; $i++){
       if ($max < $array[$i]){
            $max = $array[$i];
            $vtmx = $i;
       }
    }
    $vtmax= "So lon nhat la ".$max." tai vi tri ".$vtmx;
    return $vtmax;      
}

// Min
function getMin($array)
{
   $n = count($array);
   $vtmin="";
   $vtm =0;
   $min = $array[0];
   for ($i = 1; $i < $n; $i++){
       if ($min > $array[$i]){
            $min = $array[$i];
            $vtm = $i;
       }
           
    }
    
    $vtmin= "So nho nhat la ".$min." tai vi tri ".$vtm;       
    return $vtmin;      
}


$array = array(3,2,8,7,8,9,1);
echo (getMax($array));
echo("<br>");
echo(getMin($array));
?>