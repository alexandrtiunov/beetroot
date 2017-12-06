<?php

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

echo '<hr>';

$select1 = "SELECT model, speed, hd FROM pc WHERE price < 500";

$res = mysqli_query($db, $select1);

$data = mysqli_fetch_all($res, MYSQLI_ASSOC);

echo '<pre>';
print_r($data);
echo '</pre>';
echo '<hr>';
echo  'Уражнение 2: Найдите производителей принтеров. Вывести: maker.';
$select2 = "SELECT maker FROM product WHERE type = 'printer'";

$res2 = mysqli_query($db, $select2);

$data2 = mysqli_fetch_all($res2, MYSQLI_ASSOC);

echo '<pre>';
print_r($data2);
echo '</pre>';
echo '<hr>';
echo 'Уражнение 3: Найдите номер модели, объем памяти и размеры экранов портативных компьютеров, цена которых превышает 1000 долларов.';

$select3 = "SELECT model, ram, screen FROM laptop WHERE price >= 1000";
$res3 = mysqli_query($db, $select3);
$data3 = mysqli_fetch_all($res3, MYSQLI_ASSOC);

echo '<pre>';
print_r($data3);
echo '</pre>';
echo '<hr>';
echo 'Уражнение 5: Найдите номер модели, скорость и размер жесткого диска ПК, имеющих 12х или 24х CD и цену менее 600 долларов.';
$select4 = "SELECT `model`, `speed`, `hd` FROM `pc` WHERE `price` < '600' AND (`cd` = '12x' OR `cd` = '24x');";
$res4 = mysqli_query($db, $select4);
$data4 = mysqli_fetch_all($res4, MYSQLI_ASSOC);
echo '<pre>';
print_r($data4);
echo '</pre>';
echo '<hr>';
//*Упраженение 6(Можете подсмотреть ответ)*: Для каждого производителя, выпускающего ПК-блокноты c объёмом жесткого диска
// не менее 10 Гбайт, найти скорости таких ПК-блокнотов. Вывод: производитель, скорость.

//$select5 = "SELECT maker, speed FROM product WHERE type = 'laptop' /*AND ('hd' >= '10')*/";
//$res5 = mysqli_query($db, $select5);
//$data5 = mysqli_fetch_all($res5, MYSQLI_ASSOC);
//echo '<pre>';
//print_r($data5);
//echo '</pre>';


?>