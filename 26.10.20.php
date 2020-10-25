<?php
//подсчет количество повторяющихся значений
$array = array(17, "hi", 17, "hi", 17);
print_r(array_count_values($array));
//Возвращает массив с элементами в обратном порядке
$input = array("dad", "mam", array("I", "bro"));// вроде ничего не поменялось, все в том же пордке (я предпологал что порядок на выходе будет идти от "bro", или я не правильно понял
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);
print_r($input);
print_r($reversed);
print_r($preserved);
//удаление часть массива и замена ее на другую
$input = array("dad", "mam", "I", "bro");
array_splice($input, 3);//удаляет все кроме указанных кол-во элементов массива(начиная с начала массива)
var_dump($input);

$input = array("dad", "mam", "I", "bro");
array_splice($input, 1, -1);//удаляет все кроме указанные элементы массива( -1* обозначает с конца)
var_dump($input);

$input = array("dad", "mam", "I", "bro");
array_splice($input, 2, count($input), "orange");//удаляет все кроме указанных элементов и добовляет в конце новый элемент
var_dump($input);

$input = array("dad", "mam", "I", "bro");
array_splice($input, -1, 1, array("grandmam", "granddad"));//честно пытался понять, за что отвечает это но не понял
var_dump($input);
//суммирует значения массива
$a = array(45, 15, 27);
echo "sum(a) = " . array_sum($a) . "\n";//а для чего здесь "\n"? я удалял и ничего не менялось...
//Убирает повторяющиеся значения из массива
$input = array("key1" => "mam", "dad", "bro", "key2" => "mam", "dad", "I", "kay3" => "mam", "grandmam");
$result = array_unique($input);//все кроме "mam", попадают под индексный массив ("mam", остается под ключем "kay1").
print_r($result);

