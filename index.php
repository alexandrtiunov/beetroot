<?php

$array = [92, 15, 46, 25, 95, 45, 65, 86, 27, 155];

/**
 * This function MultipleOfFive
 * @param $array
 */
function MultipleOfFive($array) // определяем функцию
{
    for ($i = 0; $i < $array[$i]; $i++) // проходим по массиву с помощью цикла for
        if (($array[$i]%5) == 0){ // определяем какой из элементов массива кратен 5, т.е делется на 5 без остатка
        echo 'Значения кратные  пяти в Вашем массиве: это ' . $array[$i] . '<br>'; // выводим значения массива на экран
        }else {}
        return ' ';

}

echo MultipleOfFive($array);

?>