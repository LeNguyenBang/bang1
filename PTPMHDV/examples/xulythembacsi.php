<?php
require "connect.php";

if (!empty($_POST)){
    $data = $_POST;

    $sql = "INSERT INTO bacsi (hoten, tuoi, sdt	, gioitinh, diachi, email, khoa)
VALUES ('".$data['hoten']."', ".$data['tuoi'].", '".$data['sdt']."', '".$data['gioitinh']."', '".$data['diachi']."', '".$data['email']."', '".$data['khoa']."')";

    $result = $conn -> query($sql);

    header("Location:http://localhost/PTPMHDV/examples/bacsi.php");
    die();
}
?>