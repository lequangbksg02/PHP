<?php
/*$numberRan =  rand(1,100);
$tenMang = array();
$N = rand(1,100);
$index =0;
for($i = 0 ; $i< N ; $i ++) {
    array_push($tenmang, rand(10, 100));
        if($N ==array_push($tenmang, rand(10, 100))){
            echo "vi tri phan tu là: ".$index;
        }
}*/

$arrayNum=array(1,2,3,4,5,6,7,8,9);
$indexItemSearch = null;
$numberSearch = 5;
for($i =0;$i< count($arrayNum);$i++){
    if( arrayNum[$i] === $numberSearch) {
        $indexItemSearch == $i;
    }
}
if($indexItemSearch === null) {
    echo "SO can tim ko co trong mang";
}else {
    for ($i = $indexItemSearch; $i < count($arrayNum); $i++) {
        $arrayNum[$i] = $arrayNum[$i + 1];
    }

}
array_pop($arrayNum);
print_r($arrayNum);

?>