<?php
/*$i = 0;
while (true){
    echo $i."<br>";
    if ($i == 100)
    {
        break;
    }
    $i++;
}
$i=0;
do{
    echo 123;
    echo 123;
    echo 123;
    echo 123;
} while (false);*/
$arr = [1,2,3,4,5,6,7,8,9,10];
echo count($arr); /*количество элементов массива*/
echo "<br>";
echo min($arr);/*миниимальный элемент масива*/
echo "<br>";
echo max($arr); /*максимальный элемент масива*/
echo "<br>";
unset($arr[0]); /* удаление элемента массива*/
echo count($arr);
array_push($arr, 'asadasdas'); /* добавляет элемент массива*/
print_r($arr); /*выводит массив*/
array_pop($arr, 1111); /*возвращает последний элемент массива и удаляет его*/
