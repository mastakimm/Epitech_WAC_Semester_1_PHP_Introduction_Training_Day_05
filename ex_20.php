<?php

function check_email()
{
    if (isset($_POST['email'])) {
        $pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';

        if (!preg_match($pattern, $_POST['email'])) {
            echo "courriel invalide\n";
        } else {
            echo "courriel valide\n";
        }
    }
}
