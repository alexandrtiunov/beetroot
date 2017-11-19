<?php

$array = [92, 15, 46, 25, 15, 43, 65, 86, 27];

/**
 * This function count elements of array
 * @param $array
 */
function MultipleOfFive($array)
{
    for ($i = 0; $i < count($array); $i++)
        if (($array[$i]%5) == 0){
        echo 'Значения кратные  пяти в Вашем массиве: это ' . $array[$i] . '<br>';
        }else {}
        return ' ';

}

echo MultipleOfFive($array);

?>