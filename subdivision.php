<?php

$start=20;
$end=45;

for($i=$start;$i<=$end;$i++) {
    if(fmod($i,5)==0){
        $sum+=$i;
    }
}
echo $sum;
?>