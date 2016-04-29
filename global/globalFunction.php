<?php
function getFormatTime($time){
    //时间戳转日期
    $date_time_array = getdate($time); //1311177600  1316865566
    $hours = $date_time_array["hours"];
    $minutes = $date_time_array["minutes"];
    $seconds = $date_time_array["seconds"];
    $month = $date_time_array["mon"];
    $day = $date_time_array["mday"];
    $year = $date_time_array["year"];

    return $year.'-'.$month.'-'.$day.' '.$hours.':'.$minutes;

}

function php_self(){

    $php_self=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

    return $php_self;

}
?>