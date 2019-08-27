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

function sanitize($before) {
    foreach($before as $key => $value){
        $after[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $after;
}

function pulldown_year() {
    echo '<select name="year">';
    echo '<option value="2017">2017</option>';
    echo '<option value="2018">2018</option>';
    echo '<option value="2019">2019</option>';
    echo '<option value="2020">2020</option>';
    echo '</select>';
}

function pulldown_month() {
    echo '<select name="month">';
    for($i = 1; $i <= 12; $i++){
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    echo '</select>';
}

function pulldown_day() {
    echo '<select name="day">';
    for($i = 1; $i <= 31; $i++){
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    echo '</select>';
}

?>