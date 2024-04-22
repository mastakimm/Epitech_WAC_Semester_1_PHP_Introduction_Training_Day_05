<?php

function my_aff_global()
{
    foreach ($GLOBALS as $name => $value) {
        if (is_string($value)) {
            echo "$name => $value\n";
        }
    }
}
