<?php

function validName($name) 
{
    for ($i = 0; $i < strlen($name); $i++) 
    {
        $char = $name[$i];
        if (!($char >= 'a' && $char <= 'z') && !($char >= 'A' && $char <= 'Z')) 
        {
            return false; 
        }
    }
    return true;
}

function isValidUsername($username) 
{
    if (strlen($username) < 2) 
    {
        return false;
    }
    for ($i = 0; $i < strlen($username); $i++) {
        $char = $username[$i];
        if (
            !($char >= 'A' && $char <= 'Z') &&
            !($char >= 'a' && $char <= 'z') &&
            !($char >= '0' && $char <= '9') &&
            $char !== '.' && $char !== '-' && $char !== '_'
        ) {
            return false; 
        }
    }
    return true; 
}

?>