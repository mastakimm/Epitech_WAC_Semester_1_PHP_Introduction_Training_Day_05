<?php

function display_names(...$params)
{
    $result = [];
    $result[0] = pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME);
    $result[3] = func_num_args();
    $result[4] = func_num_args() % 2 === 0 ? 1 : 0;

    return $result;
}
