<?php

function convert_number(int $nbr)
{
    if ($nbr <= 1000) {
        echo chr($nbr) . PHP_EOL;
    } else {
        echo "Vive les Pangolins\n";
    }
}
