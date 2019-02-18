
<!DOCTYPE html>
<html>
<head>
    <title> Tim so nho nhat cua mang </title>
</head>
<body>
<form   method="post">
    <input type="text" name="number" placeholder="nhập số">
    <input type="submit" value="Nhap">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number  =$_POST["number"];
    $array = explode(",",$number);
    $min = $array[0];
    $index =0;
    for ($i=0;$i<count($array);$i ++){
        if ($min>$array[$i]){
            $min= $array[$i];
            $index =$i;
        }
    }
    print_r( $array);
    echo "mảng có min là: ".$min." index: ".$index;
}

?>
</body>

</html>