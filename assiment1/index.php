<?php
$arrye =[33,2,300,22,55,70,80];
$main=$arrye   [3];
$max = $arrye  [1];
foreach($arrye as $inarr)
{
  if ($main > $inarr) {
       $main = $inarr;
  }

   if ($max < $inarr ) {
       $max =$inarr;
    }

   
}
echo  "main is:$main  <br> ";
echo  "max is: $max   ";
/////////ده مقارنه arry bettwen smoll count and Larger count//////////////////////////







?>






