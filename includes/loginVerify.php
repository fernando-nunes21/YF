<?php

    session_start();
    if(!empty($_SESSION['loginUser'])){
        $showLoginAndRegister=false;
    }
    else if(empty($_SESSION['loginUser'])){
        $showLoginAndRegister=true;
    }

?>