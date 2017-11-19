<?php

//// текст, который записан в файл
//$text = 'Hello';
//// создание файла с названием а типом
//$fp = fopen('file.txt', 'a');
//// запись текстс в файл
//fwrite($fp, $text);
//// ]закрытие файла
//fclose($fp);

// если нужно добавть новый текст в файл file.txt не дублируя весь код используем функцию file_put_contents()
//file_put_contents('file.txt', 'Привет!', FILE_APPEND | LOCK_EX);
// вывод данных file.txt в браузере
//echo file_get_contents('file.txt', 'offset = 0');




//$array = [92,'name' => 'Alex', 'surname' => 'Sergey', 17, 46, 2, 15];
//
//var_dump(array_key_exists('name', $array));

//$array = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6];
//var_dump(array_unique($array));


//asort($array);
//var_dump($array);
//foreach ($array as $key => $value){
//    echo "$key => $value<br>";
//}


//$a = 5;
//$b = 10;
//
//echo $a + $b;


//$array = [1, 2, 3, 4, 'name' => 'Alex', 5, 6, 7, 8, 9, 'users' => ['Vadim', 'Alex', 'Rasul']];

//for ($i = 0; $i < 15; $i++)
//    var_dump($array[$i]);

/* может работать с ассиативными массивами
foreach ($array as $key => $value) {

    var_dump($key);
    var_dump($value);
}*/

/*foreach ($array as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key => $value) {
            ; // is_array Если мы хотим вывести массив в массиве
            echo($value . '<br/>');
        }
    }
}*/

/*while ($i < 5){
    $count = $i++;
    var_dump ($i);
}*/

//$product = [                                // Массив продуктов
//    'T4' => [                               // ключ товара
//        'pack1' => [                        // ключ упаковки
//            'name' => 'Adizol T4 1,3 мл.',  // название товара
//            'cost' => 110                   // стоимость продукта
//        ],
//        'pack2' => [
//            'name' => 'Adizol T4 111 мл.',
//            'cost' => 300
//        ]
//    ],
//    'T6' => [
//        'pack1' => [
//            'name' => 'Adizol T6 1,3 мл',
//            'cost' => 100
//        ],
//        'pack2' => [
//            'name' => 'Adizol T6 111 мл.',
//            'cost' => 500
//        ]
//    ],
//    'Ozerol' => [
//        'MP8' => [
//            'pack1' => [
//                'name' => 'Ozerol MP8 (4л.)',
//                'cost' => 65
//            ],
//            'pack2' => [
//                'name' => 'Ozerol MP8 (6л.)',
//                'cost' => 75
//            ]
//        ],
//        'MP10' => [
//            'pack1' => [
//                'name' => 'Ozerol MP10 (10л.)',
//                'cost' => 75
//            ]
//        ]
//    ]
//];
//
//echo "Cтоимость " . $product ['T6'] ['pack1'] ['name'] . " составляет " . $product ['T6'] ['pack1'] ['cost'] . " гривен";

?>