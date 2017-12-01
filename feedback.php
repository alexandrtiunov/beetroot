<?php
$errors = [];
if (!preg_match("/^[\da-zA-Z0-9]{2,50}[@]{1}[a-z]{3,10}\.[a-z_]{2,10}/", $_POST['email'])){
    $errors ['error_email'] = 'Не верно введен email адрес.';
}
if ($_FILES['file']['size'] > 5000000) {
    $errors ['error_size'] = 'Максимальный размер изображения 10 МБ.';
}
move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//
//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';

foreach ($errors as $value) {
    if (!empty($value)){
        echo $value . '<br>';
        ?><a href="index.php">Повтор ввода</a><br><?php
    }
}
if (empty($value)){
    echo 'Спасибо ваша заявка принята.';
    ?><a href="index.php">На главную</a><?php
    file_put_contents('feedback.txt', $_POST, LOCK_EX);
}

?>