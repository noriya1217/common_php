<?php
function gengo($seireki) {
    if (1868 < $seireki && $seireki <= 1911) {
        $gengo = '明治';
    } else if (1911 < $seireki && $seireki <= 1925) {
        $gengo = '大正';
    } else if (1926 <= $seireki && $seireki <= 1988) {
        $gengo = '昭和';
    } else if (1989 <= $seireki && $seireki <= 2019) {
        $gengo = '平成';
    } else {
        $gengo = '令和';
    }
    return($gengo);
}

function sanitize($before){
    foreach($before as $key => $value){
        $after[$key] = $htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $after;
}
?>