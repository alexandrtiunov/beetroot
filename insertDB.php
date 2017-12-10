<?php
echo '<pre>';
var_dump($_POST);
echo '<\pre>';

const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DB = 'join';
$user = $_POST['name'];
//$email = $_POST['email'];
$text = $_POST['text'];
$db = @mysqli_connect(HOST, USER, PASS, DB);
if ($db -> connect_errno){
    exit('Ошибка соеденения с БД');
}else {
    echo 'connection OK <br>';
}
mysqli_set_charset($db,'utf8');




