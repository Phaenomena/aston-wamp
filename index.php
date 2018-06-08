blabla

<?php
    // Commentaire en ligne
    # Un autre comm en ligne

    /** Comm
     * en bloc
     */

    echo '<h1>Hello, World</h1>';

    ?>

<h2><?php echo 'mon sous-titre'; ?></h2>


<?php echo "\tSalut"; ?>
<?php echo '\tBonjour'; ?>

<?php
    $name = 'Wilfrid';
    file_put_contents('example.txt', "Lorem ipsum.\n $name");
?>
