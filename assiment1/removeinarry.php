<?php
$arry2=[1,1,2,2,3,4,5,6];
$removearr=[];
foreach ($arry2 as  $value) {
      
    foreach ($removearr as $rem) {
        if ($rem == $value) {
            continue 2;
        }
    }



    $removearr[]=$value;
}

print_r($removearr);