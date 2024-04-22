<?php

function my_add_to_cookie(string $key, string $value)
{
    $newValue = $value . "toto";
    $time = time() + 3600;
    setcookie($key, $newValue, $time);
}
