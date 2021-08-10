<?php 

    $userInformations = unserialize($_SESSION['loginUser']);
    echo "<img src=images/".$userInformations->getProfileImage()." width=35 height=35>";

?>