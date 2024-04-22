<?php

function my_add_to_session(string $key, string $value)
{
    $newValue = $value . "titi";
    $_SESSION[$key] = $newValue;
}
