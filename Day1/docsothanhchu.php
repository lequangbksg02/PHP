<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>ĐỌC SÔ THÀNH CHỮ</h2>
<form method = "POST">
    <input type="text" name="search" placeholder="Nhập số cần đọc"/>
    <input type = "submit" id = "submit" value = "Tìm"/>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
$searchnumber = $_POST["search"];
    if ($searchnumber>0 && $searchnumber<10) {
      switch ($searchnumber) {
        case 1:
            echo $searchnumber ." ". 'Số một';
            break;
        case 2:
            echo $searchnumber ." ". 'Số hai';
            break;
        case 3:
            echo $searchnumber ." ". 'Số ba';
            break;
        case 4:
            echo $searchnumber ." ". 'Số bốn';
            break;
        case 5:
            echo $searchnumber ." ". 'Số năm';
            break;
        case 6:
            echo $searchnumber ." ". 'Số sáu';
            break;
        case 7:
            echo $searchnumber ." ". 'Số bảy';
            break;
        case 8:
            echo $searchnumber ." ". 'Số tám';
            break;
        case 9:
            echo $searchnumber ." ". 'Số chín';
            break;
        default:
            echo  $searchnumber ." ". 'out of ability';

         }

    }
    if ($searchnumber>=10 && $searchnumber<20){
        $searchnumber1=$searchnumber - 10;
        switch ($searchnumber1){
            case 0:
                echo $searchnumber ." ". 'Số mười';
                break;
            case 1:
                echo $searchnumber ." ". 'Số mười một';
                break;
            case 2:
                echo $searchnumber ." ". 'Số mười hai';
                break;
            case 3:
                echo $searchnumber ." ". 'Số mười ba';
                break;
            case 4:
                echo $searchnumber ." ". 'Số mười bốn';
                break;
            case 5:
                echo $searchnumber ." ". 'Số mười năm';
                break;
            case 6:
                echo $searchnumber ." ". 'Số mười sáu';
                break;
            case 7:
                echo $searchnumber ." ". 'Số mười bảy';
                break;
            case 8:
                echo $searchnumber ." ". 'Số mười tám';
                break;
            case 9:
                echo $searchnumber ." ". 'Số mười chín';
                break;
        }
    }
    if ($searchnumber>=20 && $searchnumber<100){
        $hangchuc = floor($searchnumber/10);
        $hangdonvi = $searchnumber%10;
        $resultHC = "";
        switch ($hangchuc){
            case 2:
                $resultHC = "hai muoi";
                break;
            case 3:
                $resultHC = "ba muoi";
                break;
            case 4:
                $resultHC = "bon muoi";
                break;
            case 5:
                $resultHC = "nam muoi";
                break;
            case 6:
                $resultHC = "sau muoi";
                break;
            case 7:
                $resultHC = "bay muoi";
                break;
            case 8:
                $resultHC = "tam muoi";
                break;
            case 9:
                $resultHC = "chin muoi";
                break;
        }

        $resultHangDV = "";
        switch ($hangdonvi){
            case 0:
                $resultHangDV = "";
                break;
            case 1:
                $resultHangDV = "mốt";
                break;
            case 2:
                $resultHangDV = "hai";
                break;
            case 3:
                $resultHangDV = "ba";
                break;
            case 4:
                $resultHangDV = "bốn";
                break;
            case 5:
                $resultHangDV = "nam";
                break;
            case 6:
                $resultHangDV = "sáu";
                break;
            case 7:
                $resultHangDV = "bay";
                break;
            case 8:
                $resultHangDV = "tám";
                break;
            case 9:
                $resultHangDV = "chín";
                break;
        }
    }

    echo $resultHC ." ". $resultHangDV;
}
?>