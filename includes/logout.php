<?php

    require_once '../class/User.php';

    session_start();
    $user = unserialize($_SESSION['loginUser']);
    $logsLogin = fopen("../logs/logsLogin.txt","a+");
    fwrite($logsLogin, "Usuário -> ".$user->getUserName().", do Email -> ".$user->getEmail()." Esta fazendo logout -> ".date(DATE_RFC822)."\n");
    fclose($logsLogin);
    unset($_SESSION['loginUser']);
    echo "<script> 
                alert('Saindo... Redirecionado a página incial');
                window.top.location.href = '../index.php';
                </script>";

?>