<?php

$array = [92, -15, 46, 25, -43, -65, 86, -27];

/**
 * This function sorting values to the files
 *
 * @param $array
 */
function sortValues($array)
{
    file_put_contents('positive values.txt', '');
    file_put_contents('not positive values.txt', ''); // функция очищает файлы перед новой записью значений

    foreach ($array as $value){ // проходим по всем элемента массива
        switch ($value){
            case $value > 0:
                file_put_contents('positive values.txt', $value . ', ', FILE_APPEND | LOCK_EX);
            break;
            case $value < 0:
                file_put_contents('not positive values.txt', $value . ', ', FILE_APPEND | LOCK_EX);
            break;
        }
    }
}

echo sortValues($array);

?>