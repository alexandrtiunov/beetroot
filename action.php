<?php
require_once 'connect.php';


 if (isset($_POST['send'])){

 }
 $error = [];

 if (!empty($_POST['text'])){
     //$textVal = clean($_POST['text']);
 }else{
     $error ['text'] = 'Заполните поле текст';
 }
 if (!empty($_FILES) || ($_FILES ['file']['size'] < 10485760)){
     move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
 }else{
     $error ['file'] = 'Размер файла не должен превышать 10 МБ';
 }

 if (!$error) {  // если введены все данные и они отвечают всем требованиям, то заполняем их в базу данных
     $dbConnect = getDbConnect();

     $data ['data'] = $_POST;
     $data ['file'] = $_FILES;

     insertQuery($dbConnect, $data);

    foreach ($error as $value) {
        echo '<p style="color:red">' . $value . '</p>';
    }
}else {
     echo 'Данные внесены в БД';
 }

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//
//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';


 ?>