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
<h2>ĐĂNG KÝ NGƯỜI DÙNG</h2>
<form method = "POST">
    <input type="text" name="name" placeholder="Tên người dùng"/><br/><br/>
    <input type="text" name="email" placeholder="Email"/><br/><br/>
    <input type="text" name="telephone" placeholder="Số điện thoại"/><br/><br/>
    <input type = "submit" id = "submit" value = "Đăng Ký"/>
</form>
</body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $has_error = false;
    if (empty($name)) {
        $nameErr = "Tên không được để trống!";
        $has_error = true;
    }
    if (empty($email)) {
        $emailErr = "Email không được để trống!";
        $has_error = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
            $has_error = true;
        }
        if (empty($telephone)) {
            $telephoneErr = "Điện thoại không được để trống!";
            $has_error = true;
        }
        if ($has_error === false) {
            saveDataJSON("data.json", $name, $email, $telephone);
            $name = NULL;
            $email = NULL;
            $telephone = NULL;
        }
    }
}
function saveDataJSON($filename, $name, $email, $phone)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        );
        // converts json data into array
        $arr_data = loadRegistrations($filename);
        // Push user data to array
        array_push($arr_data, $contact);
        //Convert updated array to JSON
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        //write json data into data.json file
        file_put_contents($filename, $jsondata);
        echo "Lưu dữ liệu thành công!";
    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }
}
function loadRegistrations($filename){
    $jsondata = file_get_contents($filename);
    $arr_data = json_decode($jsondata, true);
    return $arr_data;
}



