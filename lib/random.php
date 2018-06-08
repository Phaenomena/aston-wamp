<?php

// Cette fonction permet de générer un code aléatoirement

// @param int $max
// @return string

function keygen($max = 8){
    $chars = 'abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ123456789@#!&~-';
    $len = strlen($chars);
    $key = '';

    for ($i = 0; $i < $max; $i++) {
        $key .= $chars[rand(0, $len - 1)];
    }
    return $key;
}