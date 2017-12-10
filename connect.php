<?php
const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DB = 'join';
//$user = $_POST['name'];
//$email = $_POST['email'];
//$text = $_POST['text'];

function getDbConnect(){
    $db = @mysqli_connect(HOST, USER, PASS, DB);
    mysqli_set_charset($db,'utf8');
    return $db;
}
//echo '<pre>';
//print_r(getDbConnect());
//echo '</pre>';
//die;

function insertQuery ($db, $data) {
    $text = $_POST['text'];
    $textVal = mysqli_real_escape_string($db, $data ['data']['text']);
    $fileName = $data ['file']['file']['name'];
    $query = "INSERT INTO user_mess (umes_user_id, 	umes_message, umes_file) VALUES (1, '$text', '$fileName')";
    mysqli_query($db, $query);
}
function fetchQuery ($db){
    $query = "SELECT * FROM user_mess ORDER BY umes_id DESC";
    $res = mysqli_fetch_all($db, $query);
    return mysqli_fetch_all ($res, MYSQLI_ASSOC);
}

?>

