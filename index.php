<?php
/*
const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DB = 'hw_db';

$db = @mysqli_connect(HOST, USER, PASS, DB);
if ($db -> connect_errno){
    exit('Ошибка соеденения с БД');
}else {
    echo 'connection OK <br>';
}
mysqli_set_charset($db,'utf8');
 // создаем массив с названиями полей и их значениями, которые необходимо внести в БД
$product [] = "INSERT INTO product (maker, model, type) VALUES ('Apple iMac', 'MK142UA/A', 'PC')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('Lenovo', '300-20ISH', 'PC')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('Acer Aspire', 'TC-780', 'PC')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('ASUS', 'D820MT', 'PC')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('HP', 'Y7Z52EA', 'Laptop')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('Lenovo', '20HR002KRT', 'Laptop')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('HP LaserJet', 'G3Q66A', 'Printer')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('Epson', 'C11CF72403', 'Laptop')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('Epson', '3243SDF', 'Laptop')";
$product[] = "INSERT INTO product (maker, model, type) VALUES ('HP', '34534GDFG', 'Printer')";
// проходим по массиву
foreach ($product as $key => $value){
    $res_product = mysqli_query($db, $value); // вносим данные в переменную
}

$pc[] = "INSERT INTO pc (code, model, speed, ram, hd, cd, price) VALUES ('1', 'MK142UA', '2.7ГГц', '8ГБ',
'1ТБ', '12x', '1000')";
$pc[] = "INSERT INTO pc (code, model, speed, ram, hd, cd, price) VALUES ('2', '300-20ISH', '3.7ГГц', '4ГБ',
'500ГБ', '24x', '500')";
$pc[] = "INSERT INTO pc (code, model, speed, ram, hd, cd, price) VALUES ('3', 'TC-780', '3.3ГГц', '4ГБ',
'1ТБ', '24x', '400')";
$pc[] = "INSERT INTO pc (code, model, speed, ram, hd, cd, price) VALUES ('4', 'D820MT', '3.2ГГц', '4ГБ',
'500ГБ', '8x', '358')";

foreach ($pc as $key => $value){
    $res_pc = mysqli_query($db, $value);
}

$laptop[] = "INSERT INTO laptop (code, model, speed, ram, hd, screen, price) VALUES ('1', 'Y7Z52EA', '2.5ГГц', '4ГБ',
'500ГБ', '15', '700')";
$laptop[] = "INSERT INTO laptop (code, model, speed, ram, hd, screen, price) VALUES ('2', '20HR002KRT', '2.7ГГц', '8ГБ',
'512ГБ', '17', '1000')";
$laptop[] = "INSERT INTO laptop (code, model, speed, ram, hd, screen, price) VALUES ('3', '3243SDF', '2.1ГГц', '4ГБ',
'512ГБ', '15', '500')";
$laptop[] = "INSERT INTO laptop (code, model, speed, ram, hd, screen, price) VALUES ('4', 'ASDFVS234', '2.8ГГц', '1ГБ',
'512ГБ', '21.5', '350')";

foreach ($laptop as $key => $value){
    $res_laptop = mysqli_query($db, $value);
}

$printer[] = "INSERT INTO printer (code, model, color, type, price) VALUE ('1', 'G3Q66A', 'n', 'Laser', '500')";
$printer[] = "INSERT INTO printer (code, model, color, type, price) VALUE ('2', 'C11CF72403', 'y', 'Jet', '700')";
$printer[] = "INSERT INTO printer (code, model, color, type, price) VALUE ('3', '34534GDFG', 'y', 'Laser', '450')";

foreach ($printer as $key => $value){
    $res_printer = mysqli_query($db, $value);
}

if ($res_product && $res_pc && $res_laptop && $res_printer) { // Проверяем если данные в переменных true вносим все
                                                              //данные в БД одновременно
    echo 'данные занесены в БД';
}else {
    echo 'Ошибка! Данные не внесены в БД';
}
*/
?>