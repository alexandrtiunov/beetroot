<?php

$array = [92, -15, 46, 25, -43, -65, 86, -27];
$fileName = 'positive values.txt';
$fileName1 = 'not positive values.txt';



/**
 * This function sorting values to the files
 *
 * @param $array
 */
function sortValues($array)
{
    foreach ($array as $value){
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



?>