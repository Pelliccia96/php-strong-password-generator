<?php

function passwordGen($length, $repeat, $letters, $number, $symbol) {
    $password = '';
    $numbers = '0123456789';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $special = '.,;-_|@€!"$%&/()=?^*[]';
    $generatePassword = "";
    
    if ((!$letters && !$number && !$symbol)) {
        $generatePassword = $lowercase . $uppercase . $numbers .$special;
    }
    
    if ($letters) {
        $generatePassword .= $lowercase . $uppercase;
    }

    if (($number)) {
        $generatePassword .= $numbers;
    }

    if (($symbol)) {
        $generatePassword .= $special;
    }
    if ($repeat === 0) {
        $i = 0;
        while ($i < $length) {
            $char = substr($generatePassword, rand(0, strlen($generatePassword)-1), 1);
            if (!strstr($password, $char)) {
                $password .= $char;
                $i++;
            }
        }
        

    }else{
        $i = 0;
        while ($i < $length) {
            $char = substr($generatePassword, mt_rand(0, strlen($generatePassword)-1), 1);
            $password .= $char;
            $i++;
        }
    }
    
    return $password;
}
?>
