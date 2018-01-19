<?php

// Задача 3: Меню на сайте

//$menu = ['Кнопка1', 'Кнопка2', 'Кнопка3', 'Кнопка4', 'Кнопка5', 'Кнопка6', 'Кнопка7', 'Кнопка8', 'Кнопка9', 'Кнопка10'];
//
//echo '<ul>';
//
//foreach ($menu as $val) {
//
//    echo "<li><a href=\"#\">$val</a></li>";
//
//}
//echo '</ul>';


// Урок 6: Пользовательские функции Задачи
//Задача 1: Информация о товарах в корзине


function getSummaryShoppingCart($products)
{
    $sumPrice = 0;
    $sumQuantity = 0;

    foreach ($products as $product) {

        $sumQuantity += $product['quantity'];

        $sumPrice += $product['price'] * $product['quantity'];

        $result = ['sumQuantity' => $sumQuantity, 'sumPrice' => $sumPrice];

    }
    return $result;

}

$products = [['name' => 'Телевизор', 'price' => '400', 'quantity' => 1],
['name' => 'Телефон', 'price' => '300', 'quantity' => 3],
['name' => 'Кроссовки', 'price' => '150', 'quantity' => 2]];



$result = getSummaryShoppingCart($products);

echo '<pre>';
var_dump($result);


//Задача 2: Квадратное уравнение
//Написать функцию, которая решает квадратное уравнение. Функция принимает 3 аргумента
//(коефициенты) D=b^{2}-4ac.




function getquadraticEquation($a, $b, $c)
{
    $d = $b^(2) - 4 * $a * $c;
    if ($d > 0){
        $x1 = (- $b + sqrt($d)/2 * $a);
        $x2 = (- $b - sqrt($d)/2 * $a);
        $result = ['x1' => $x1, 'x2' => $x2];
        return $result;
    }elseif ($d == 0){
        $x1 = $x2 = - ($b / 2 * $a);
        return $x1;
    }else {
        $result = 'Корней нет';
        return $result;
    }
}

echo '<pre>';
var_dump(getquadraticEquation(1,26,120));

?>
