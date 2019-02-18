<?php
$number = array
(
    array(1,4,0,7,9),
    array(8,5,2,6,3)
);
$max = [0][0];
for($i = 0;$i<2;$i++){
    for($j = 0;$j<count($number[$i]);$j++){
        if($max<$number[$i][$j]){
            $max = $number[$i][$j];
        }
    }
}
echo "số lớn nhất là:" .$max;
?>