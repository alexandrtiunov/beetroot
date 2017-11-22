<?php

$array = [92, 99, 28, 17, 46, 2, 15, 43, 65, 86, 27, 24, 56];

/**
 * This function count elements of array
 *
 * @param $array
 * @return int
 */
function arrayCount($array) // определяем функцию
{
    $arrayCount = 1; // Счетчик, который будет считать элементы массива
    foreach ($array as $value){  // проходим по всем элементам массива
        $result = $arrayCount ++; // в переменную $result вносим колличество элементов массива
    }
    return $result; // возвращаем $result
}

echo 'в массиве ' . arrayCount($array) . ' элементов!'; // выводим значение на экран

?>