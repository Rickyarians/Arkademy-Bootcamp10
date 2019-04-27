<?php

// function untuk generate
function Generateacak($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// function looping berapa banyak generate
function banyakrandom($value) {

    for($total = 0; $total < $value; $total++ ){
        echo  Generateacak()."\r\n";
    }
}

banyakrandom(3);
?>