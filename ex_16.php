<?php

function check_types(array $types)
{
    foreach ($types as $type => $values) {
        foreach ($values as $value) {
            if ($type !== gettype($value)) {
                return false;
            }
        }
    }
    return true;
}
