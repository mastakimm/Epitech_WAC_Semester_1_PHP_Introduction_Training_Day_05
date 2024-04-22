<?php

function check_user_acl(array $user, string $permission)
{
    foreach ($user as $key => $value) {
        if (!in_array($permission, $user['permissions'])) {
            return false;
        }
    }
    return true;
}
