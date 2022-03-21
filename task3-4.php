<?php

/*task 3*/

/*$array_length=(int)readline('enter a length of array');
echo"enter your array length".$array_length;
$values_array=array();
for ($x=0;$x<$array_length;$x++)
{
    $index_array=(int)readline('enter the value');
   $push=array_push($values_array,$index_array);
}
$max=max($values_array);
echo"the maximum is =  ".$max;
*/

/*task 4*/


$text=readline('enter your text');
$array_values=array(strtolower($text));
$first_value=$array_values[0];
$indexed_array=array(strlen($text));
for($x=0;$x<strlen($text);$x++)
{
    for($y=0;$y<strlen($text);$y++)
    {
         if($array_values($x)==$array_values($y))
         {
             break;
         }
         else
         {
             continue;
         }

    }
}




