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

function is_palindrom($subject) {
    $subject = preg_replace('/\s/', '', $subject);
    $subject_i = strlen($subject) - 1;
    $subject_r = '';
    while( $subject_i >= 0 ) {
        $subject_r .= $subject[$subject_i];
        $subject_i --;
    }
    if( $subject == $subject_r ) {
        return true;
    } else {
        return false;
    }
}
$subject = '123454321';
if( is_palindrom($subject) ) {
    echo "Строка <strong>$subject</strong> это палиндром<br/>\n";
} else {
    echo "Строка <strong>$subject</strong> это не палиндром<br/>\n";
}
$subject = 'А роза упала на лапу Азора';
if( is_palindrom($subject) ) {
    echo "Строка <strong>$subject</strong> это палиндром<br/>\n";
} else {
    echo "Строка <strong>$subject</strong> это не палиндром<br/>\n";
}

//4

$text = 'я очень плохо знаю язык программирования';
$arr = explode(' ', $text);
$max = $arr[0];
for ($i=0; $i<count($arr); $i++) {
    if(strlen($arr[$i]) > strlen($max)){
        $max = $arr[$i];
    }
}
echo $max;

//5

$text = "My BRO is best";
echo mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/', '', $text));
echo "<br>";
echo mb_strlen( preg_replace('/[^a-zа-яё]/', '', $text));

