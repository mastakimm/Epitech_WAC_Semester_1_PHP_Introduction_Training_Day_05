<?php

function my_get_weird_info()
{
    if (!isset($_GET['nbr_elem'])) {
        return null;
    } else {
        $nbr_elem = $_GET['nbr_elem'];
        foreach ($_GET as $value) {
            if ($nbr_elem > 0) {
                echo $value;
                $nbr_elem--;
            }
        }
        return 0;
    }
}
