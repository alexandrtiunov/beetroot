<?php

require_once "index.php";

$product = [];

$connect = mysqli_connect('localhost', 'root', '', 'shop_product');
if (mysqli_connect_errno()){
    echo 'Ошибка подключения к БД';
}
$select = "SELECT * FROM Product";
$res = mysqli_query ($connect, $select);

while ($row = mysqli_fetch_array($res)){
//    echo '<pre>';
//    print_r($row);
    $product [] = new $row ['class'] ($row);
}

