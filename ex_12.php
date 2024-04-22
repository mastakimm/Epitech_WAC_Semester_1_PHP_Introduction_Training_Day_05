<?php

function get_execution_time()
{

    $start = $_SERVER["REQUEST_TIME_FLOAT"];
    $end = microtime(true);

    $execution_time = $end - $start;
    return (float)sprintf("%.7f", $execution_time);
}
