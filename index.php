<?php

//define(myFavoriteMonth, 'june');
//
//$month = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'november', 'december'];
//
//
//    foreach ($month as $value){
//        if ($value == myFavoriteMonth)
//            echo 'My favorite month of the year it\'s - ' . $value;}


$numbers = []; // определяем пустой массив

for ($i = 0; $i <= 100; $i++) { // делаем циклом for 100 проходов по массиву
    $numbers [$i] = rand(0, 9); // и вносим в него элементы в диапазоне от 0 до 9 рандомом
}
echo '<pre>';
print_r($numbers);
echo '</pre>';

/**
 * This function write numbers from array through one
 *
 * @param array $numbers
 * @return mixed
 */
function writeNumbers($numbers)
{
file_put_contents('numbers.txt', '');
    foreach ($numbers as $key => $value) { // проходим по всем ключам массива
        if (($key % 2) == 0) {  // выбираем ключи через один
            file_put_contents('numbers.txt', $value . ' ', FILE_APPEND | LOCK_EX); // записываем в файл
        }
    }
    return $value;
}
writeNumbers($numbers);


?>




