<?php

$var = '';

// Ceci est vrai, alors le texte est affiché
if (isset($var)) {
    echo 'Cette variable existe, donc je peux l\'afficher.';
}

// Dans les exemples suivants, nous utilisons var_dump() pour afficher 
// le retour de la fonction isset().

$a = 'test';
$b = 'anothertest';

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE

?>