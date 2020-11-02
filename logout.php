<?php
    require 'inc/head.php';

    // Réinitialisation du tableau de session
    // On le vide intégralement
    $_SESSION = array();
    // Destruction de la session
    session_destroy();
    // Destruction du tableau de session
    unset($_SESSION);

    echo '<meta http-equiv="refresh" content="0;URL=login.php">';
?>