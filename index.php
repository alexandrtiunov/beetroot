<?php

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

$product = [                                // Массив продуктов
    'T4' => [                               // ключ товара
        'pack1' => [                        // ключ упаковки
            'name' => 'Adizol T4 1,3 мл.',  // название товара
            'cost' => 110                   // стоимость продукта
        ],
        'pack2' => [
            'name' => 'Adizol T4 111 мл.',
            'cost' => 300
        ]
    ],
    'T6' => [
        'pack1' => [
            'name' => 'Adizol T6 1,3 мл',
            'cost' => 100
        ],
        'pack2' => [
            'name' => 'Adizol T6 111 мл.',
            'cost' => 500
        ]
    ],
    'Ozerol' => [
        'MP8' => [
            'pack1' => [
                'name' => 'Ozerol MP8 (4л.)',
                'cost' => 65
            ],
            'pack2' => [
                'name' => 'Ozerol MP8 (6л.)',
                'cost' => 75
            ]
        ],
        'MP10' => [
            'pack1' => [
                'name' => 'Ozerol MP10 (10л.)',
                'cost' => 75
            ]
        ]
    ]
];

echo "Cтоимость " . $product ['T6'] ['pack1'] ['name'] . " составляет " . $product ['T6'] ['pack1'] ['cost'] . " гривен";

?>