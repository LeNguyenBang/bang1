<?php
require "connect.php";

if (!empty($_POST)){
    $data = $_POST;

    $sql = "UPDATE dungcuyte SET MaDungCu ='".$data['MaDungCu']."',TenDungCu = '".$data['TenDungCu']."',
    Khoa = '".$data['Khoa']."', SLNhap = '".$data['SLNhap']."', SLHienCo = '".$data['SLHienCo']."' WHERE ID = ".$data['ID'];
    $result = $conn -> query($sql);

    header("Location:http://localhost/PTPMHDV/examples/dungcuyte.php");
    die();
}
?>