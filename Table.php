<?php
// Méthode avec HTML dans php

function horizontal($multiple) {
    for ($i = -1; $i < 10; $i++) {
        echo '<td>' . abs($i*$multiple) . '</td>';
    }
}

function vertical () {
    for ($j = -1; $j < 10; $j++) {
        echo '<tr>';
        horizontal($j);
        echo '</tr>';
    }
}
?>

<table>
    <?php vertical(); ?>
</table>


<!--Autre méthode avec php dans HTML
voir tablehtml.php-->