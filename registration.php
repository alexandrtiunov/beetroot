    <?php

    if (strlen($_POST['login']) < 4 || strlen($_POST['login']) > 15) {
        echo'Логин должен состоять не менее чем из 3 символов и не более чем из 15. <br>';
    }
    if (!preg_match('/^[a-zA-Z0-9]/', $_POST['login'])) {
        echo 'Логин может содержать только латинские буквы и цифры. <br>';
    }
    if (!preg_match("/^[\da-zA-Z0-9]{2,50}[@]{1}[a-z]{3,10}\.[a-z_]{2,10}/", $_POST['email'])){
        echo 'Пожалуста введите верно Ваш email адрес. <br>';
    }
    if (!preg_match("/^[\da-zA-Z_]{3,10}$/", $_POST['password']))
        echo 'Пароль может содержать только латинские буквы и цифры, длинна от 3 до 10 символов. <br>';

    if ($_FILES['avatar']['error'] == 1){
        echo $_FILES['avatar']['name'] . ' - Размер файла может быть не более 5Mb. <br>';
    }
    if (exif_imagetype($_FILES['avatar']['tmp_name']) != 2){
        echo 'Поддерживается только формат .jpg <br>';
    }

    if (!empty($_POST)){
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
    if (!empty($_FILES)) {
            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'upload/' . $_FILES['avatar']['name']);
    }

    if (!empty($_POST) && !empty($_FILES)){
        ?><p><a href="index.php">На главную</a></p><?php
    }elseif (empty($_FILES) || empty($_POST)){
        ?><p><a href="index.php">Повтор ввода данных</a></p><?php
    }

    ?>







