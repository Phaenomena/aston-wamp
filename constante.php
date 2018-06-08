<?php

// LES CONSTANTES
// Donnée qui ne peut être modifiée

define('NOM_DE_LA_CONST', 'La valeur');
// La valeur est de type primitif (string, number, boolean) mais pas d'Objet

echo NOM_DE_LA_CONST;

define('APP_NAME', 'Aston');
echo APP_NAME;

define('name', 'toto', false);
echo name;
?>

<!-- Balise raccourci-->
<?= 'toto' ?>

<!--CST MAGIQUES-->

<?php
echo '<br>';
echo __FILE__;

echo '<br>';
echo __DIR__;

echo '<br>';
echo __LINE__;

echo '<br>';
echo basename(__FILE__);
echo '<br>';
echo dirname(__FILE__);
echo '<br>';
echo dirname(dirname(__FILE__));
echo '<br>';
echo dirname(__FILE__);
