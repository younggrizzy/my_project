<?php
$shop=[
    ['name'=>'HP Gaming Pavilion 15-dk0021ur', 'availability' => '1', 'price' => '1200$'],
    ['name'=>'Apple MacBook Air 2020', 'availability' => '0', 'price' => '1400$'],
    ['name'=>'Asus TUF Gaming FX505DT-HN450', 'availability' => '1', 'price' => '800$'],
    ['name'=>'SAMSUNG Galaxy A11', 'availability' => '2', 'price' => '150$'],
    ['name'=>'APPLE iPhone XR', 'availability' => '0', 'price' => '1000$'],
    ['name'=>'Xiaomi Redmi 9', 'availability' => '3', 'price' => '150$'],
];
foreach ($shop as $key => $availability)
{
    if($availability['availability']){
        echo 'Product -'.$availability['name'].' - it is price - '.$availability['price']."<br>";
    }else{
        $message= 'not availability';
    }
}

// таблица умножения

