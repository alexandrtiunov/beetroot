<?php

$array = [92, 'name' => 'Alex', 'surname' => 'Sergey', 17, 46, 2, 15, 43, 65, 86, 27];

/**
 * This function count elements of array
 *
 * @param $array
 * @return int
 */
function arrayCount($array)
{
    $result = count($array);
    return $result;
}

echo 'в массиве ' . arrayCount($array) . ' элементов!';

?>