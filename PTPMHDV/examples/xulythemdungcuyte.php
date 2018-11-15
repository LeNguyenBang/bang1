<?php
require "connect.php";

if (!empty($_POST)){
    $data = $_POST;

    $sql = "INSERT INTO dungcuyte (MaDungCu, TenDungCu, Khoa, SLNhap, SLHienCo) VALUES ('" .$data['MaDungCu']."', ".$data['TenDungCu'].", '".$data['Khoa']."', '".$data['SLNhap']."', '".$data['SLHienCo']."')";

    $result = $conn -> query($sql);

    header("Location:http://localhost/PTPMHDV/examples/dungcuyte.php");
    die();
}
?>