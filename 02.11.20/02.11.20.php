<?php
//1

$text = "      hello      world     !!!  ";
echo preg_replace('/[^\S\r\n]+/', ' ', $text);

//2

$text = "my bro won be like Kanye, but he won't be like morgenstern";
$explode_text = explode(" ",$text);
$array_replace = array(',','.','-','?','!',':',';','_');
for($p=0;$p<count($explode_text);$p++) {
    $string_light = strlen(str_replace($array_replace,"",$explode_text[$p]));
    if(($string_light>2) and ($string_light<6)) {
        echo $explode_text[$p]." ";
    }
}

//3

$text = "KAKAK";
echo"<br>".$text;
$reverse= strrev($text);
echo "<br>".$reverse;
if($text == $reverse) {
    echo "<br>".$text." is a palindrom";
}
else {
    echo "<br>".$text." is not a palindrom";
}
//4

$text = 'я очень плохо знаю язык программирования';
$arr = explode(' ', $text);
$max = $arr[0];
for ($i=0; $i<count($arr); $i++) {
    if(mb_strlen($arr[$i]) > mb_strlen($max)){
        $max = $arr[$i];
    }
}
echo $max;

//5

$text = "My BRO is best";
echo mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/', '', $text));
echo "<br>";
echo mb_strlen( preg_replace('/[^a-zа-яё]/', '', $text));

