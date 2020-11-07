<?php

function f1($ff) {
    return preg_replace('/[^\S\r\n]+/', ' ', $ff);
}

function f2($sf) {
    $explode_text = explode(" ",$sf);
    $array_replace = array(',','.','-','?','!',':',';','_');
    for($p=0;$p<count($explode_text);$p++) {
        $string_light = strlen(str_replace($array_replace,"",$explode_text[$p]));
        if(($string_light>2) and ($string_light<6)) {
            echo $explode_text[$p]." ";
        }
    }
}
function f3($sf) {
    echo"<br>".$sf;
    $reverse= strrev($sf);
    echo "<br>".$reverse;
    if($sf == $reverse) {
        echo "<br>".$sf." is a palyndrome";
    }
    else {
        echo "<br>".$sf." is not a palyndrome";
    }
}
function f4($fourf) {
    $arr = explode(' ', $fourf);
    $max = $arr[0];
    for ($i=1; $i<count($arr); $i++) {
        if(mb_strlen($arr[$i]) > mb_strlen($max)){
            $max = $arr[$i];
        }
    }
    return $max;
}
function f5($fivef) {
    echo mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/', '', $fivef));
    echo "<br>";
    echo mb_strlen( preg_replace('/[^a-zа-яё]/', '', $fivef));
    echo "<br>";
}