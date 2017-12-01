<?php

$errors = [0];
if (!preg_match("/^[\da-zA-Z0-9]{2,50}[@]{1}[a-z]{3,10}\.[a-z_]{2,10}/", $_POST['email'])) {
    $errors = ['error_mail'];
}

if ($_FILES['file']['size'] > 10000000) {
    $errors = ['error_size'];
}

move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
echo '<pre>';
print_r($_POST);
echo '</pre>';

echo '<pre>';
print_r($_FILES);
echo '</pre>';

foreach ($errors as $value) {

    if ($value == 0) {
        echo 'Спасибо ваша заявка принята.'; ?><a href="index.php">На главную</a><?php
        file_put_contents('feedback.txt', $_POST, LOCK_EX);
    } else {
        echo 'Ошибка заполнения данных.'; ?><a href="index.php">Повтор ввода</a><?php
    }
}


?>
