<?php
// ClassWork
//$str = 'php';
//echo mb_strtoupper($str);

//$str = 'html css php';
//echo substr('html css php', 0, 4);
//echo substr('html css php', 5, 3);
//echo substr('html css php', 9, 3);

//$str = '31.12.2013';
//echo str_replace('.', '-', $str);

//$str = 'PHP';
//echo ucfirst(strtolower('PHP')); // оставляет большой только первую букву

/* Home Work
 1. Удаление заданной подстроки "end" из текста
  2. Количество вхождений подстроки "end"
  3. Определить длины кратчайшего и самого длинного слов в строке
  4. Если текущее в строке содержит букву "а" сделать его UPPER
*/
//#1
$str = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
//$str = str_replace (' and', '&', $str); // функция удаллила из текста слово "and", и для наглядности мы его заменили "&"
//echo $str;

//#2
//$str = mb_substr_count ($str, ' and', 'utf-8');// функция считает сколько раз подстрока "and" встречается в тексте
//                                               //для того что бы определить предлог "and" отдельно ставим пробел перед словом
//echo $str;

//#3
//   $newStr = explode(' ', $str); // создаем массив из строки
//   $newStr = str_replace(',', '', $newStr); // удаляем все запятые и точки
//   $newStr = str_replace('.', '', $newStr);
//    $shoterWord = $newStr[0]; //  переменная для наименьшего значения
//    $longestWord = $newStr[0]; //  переменная для наибольшего значения
//   foreach ($newStr as $value) { // проходим по массиву
//       if (strlen($value) < strlen($shoterWord)) { // находим наименьшее значение
//           $shoterWord = $value; // приравниваем переменную к наименьшему значению
//       }
//   }
//    echo 'Самое короткое слово в тексте имеет ' . strlen($shoterWord) . ' символ' . '<br>';
//    foreach ($newStr as $value) { // проходим по массиву
//        if (strlen($value) > strlen($longestWord)) { // находим самое длинное слово
//            $longestWord = $value;
//        }
//    }
//    echo 'Самое длинное слово в тексте имеет ' . strlen($longestWord) . ' символов' . '<br>';

#4
//$str = str_replace ('a', 'A', $str); // заменили все "а" на "А"
//echo $str;

?>