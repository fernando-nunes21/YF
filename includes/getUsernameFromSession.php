<?php

    $userInformations = unserialize($_SESSION['loginUser']);
    echo "<h3 style='color:white'> Olá <a href='includes/userProfile.php' target='pageContent'>".$userInformations->getUsername()."</a> | <a href='includes/logout.php' target='pageContent'> SAIR </a></h3>";

?>