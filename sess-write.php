<?php

// sess-write.php

session_start();
echo session_id();

$_SESSION['prenom'] = 'Charline';
$_SESSION['nimp'] = array(true, 'Chuck');