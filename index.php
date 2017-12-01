<?php

//$numbers = [1, 2, 3, 4, 5];
//$sum = 0;
//
//foreach ($numbers as $value){
//
//    $sum = $sum + pow($value,2);
//    echo $sum . '</br>';
//}
//
//var_dump($sum);

$array = []; //
$numberFormats = [];

for ($i = 0; $i < 100; $i++){
    $array[] = rand(0, 100);
}


echo '<pre>';
print_r($array);
echo '<pre>';


foreach ($array as $value){
    $numberFormats[] = number_format(log10($value) ,3);
}

echo '<pre>';
print_r($numberFormats);
echo '<pre>';

?>