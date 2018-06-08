<?php

/**
 * $_GET
 * $_POST
 * $_REQUEST
 * $_COOKIE
 * $_SESSION
 */

// REQUEST == GET et POST
var_dump($_REQUEST);
echo '<br>';

echo 60 * 60; // 3600
echo '<br>';
echo time() + 3600;
echo '<br>';

//var_dump($_SERVER);

// echo $_SERVER['REMOTE_ADDR']; // récup ip
// echo $_SERVER['REMOTE_METHOD']; // récup get ou post
// echo $_SERVER['REMOTE_URI']; // récup url
// echo $_SERVER['HTTP_REFERER']; // récup page d'où le client vient
// echo $_SERVER['HTTP_USER_AGENT']; // récup le nav

setcookie(
    'color',
    'yellow',
    time() + 60 * 60,
    '/aston/',
    'aston.com',
    true,
    true
);

echo $_COOKIE['color'];
