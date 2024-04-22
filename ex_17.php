<?php

function check_url(array $whiteList)
{
    if (!isset($_GET['token'])) {
        return false;
    } else {
        $token = $_GET['token'];
        for ($i = 0; $i < strlen($token); $i++) {
            $char = $token[$i];
            if (!in_array($char, $whiteList)) {
                return -1;
            }
        }
        return 1;
    }
}
