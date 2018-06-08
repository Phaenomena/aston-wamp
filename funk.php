<?php

function sayHello($prenom = '') {
    return 'Bonjour ' . $prenom;
}

$msg = sayHello('Spike');
echo $msg . '<br>';
echo sayHello() . '<br>';

$f = function () {
    return 'Hi everyone';
};

echo $f();
echo '<br>';

$name = 'Kirk';

function sayMyName() {
    global $name;
    echo $name;
}

sayMyName();

$f = function () use ($name) {
    echo $name;
};

$f();

echo '<br>';

(function () {
    echo 'Je suis anonyme';
})();

function changeValue(&$number) {
    ++$number;
}

$n = 10;

changeValue($n);

echo $n;

// FIFO == first in first out
// LILO == last in last out

$arr = ['a', 'z', 'f'];
sort($arr);

var_dump($arr);

function toExec($text, $callback) {
    echo 'Connexion en cours...';
    echo 'Connexion établie';
    echo $callback($text);
}

toExec('HELLO', 'strtolower'); // strtolower devient une fonction

toExec('Super Text', function ($text) {
    echo 'Le texte est: ' . $text;
});

function forever($array, $callback) {
    foreach ($array as $key => $value) {
        $callback($key, $value);
    }
}

forever(['x', 'y', 'z'], function ($key, $value) {
    printf("%s: %s", $key, $value);
});

forever(['x', 'y', 'z'], 'nomDeMaFonction');