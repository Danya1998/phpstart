<?php
$n=20;
$data = range(1,100);
$rand=array_rand($data,$n);
for($i=0;$i<=$rand;$i++){
    if(fmod($i,2)==0);

}
print_r ($rand);

?>