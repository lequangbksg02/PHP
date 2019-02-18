<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/02/2019
 * Time: 17:32 CH
 */
function congHaiSo($a,$b){
        return $a + $b;
}
function truHaiSo($a,$b){
        return $a - $b;
}
function chiaHaiSo($a,$b){
    try {
        return $a / $b;
        if($b == 0) {
            throw new Exception("a khong the chia cho b");
        }
        return true;
    } catch (Exception $e) {
        throw new Exception("a khong the chia cho b");
    }
}
function nhanHaiSo($a,$b){
        return $a * $b;
}
$sumHaiSo = congHaiSo(5,5);
echo $sumHaiSo;
echo "<br>";
$hieuHaiSo = truHaiSo(5,5);
echo $hieuHaiSo;
echo "<br>";
$chiaHaiSo = chiaHaiSo(5,5);
echo $chiaHaiSo;
echo "<br>";
$nhanHaiSo = nhanHaiSo(5,5);
echo $nhanHaiSo;
