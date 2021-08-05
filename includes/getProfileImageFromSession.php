<?php 

    $userInformations = unserialize($_SESSION['loginUser']);
    echo "<img src=images/".$userInformations->getProfileImage()." width=50 height=50s>";

?>