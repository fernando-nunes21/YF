<?php

    $userInformations = unserialize($_SESSION['loginUser']);
    echo "<h3 style='color:white'> Olá ".$userInformations->getUsername()."</h3>";

?>