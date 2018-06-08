<?php

// include  pour ajouter la lib (WARNING)
// require similaire à include mais arrête tout si une erreur a été détectée (FATAL ERROR)

require './lib/random.php';

// c'est mon fichier image

session_start();

$key = keygen();
$_SESSION['captcha'] = $key;

header('Content-Type: image/png');

$im = imagecreatetruecolor(270, 60);
$bg = imagecolorallocate($im, 87, 75, 144);
$fg = imagecolorallocate($im, 223, 228, 234);
$font = 'C:\Windows\Fonts\arial.ttf';

/* for ($i = 0; $i <5; $i++) {
    imageline($im, rand(0, 100), rand(0, 150), rand(5, 300), 36, $fg);
}*/

imagefill($im, 0, 0, $bg);
imagettftext($im, 30, 0, 0, 40, $fg, $font, $key);
imagepng($im);
imagedestroy($im);
// echo keygen();