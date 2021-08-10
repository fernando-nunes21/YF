<?php

    require_once '../includes/bankConnection.php';
    include '../class/User.php';

    $userInformations = null;

    function authenticateLogin($email,$pass,$database){
        $query = "SELECT * FROM Users";
        $result = mysqli_query($database,$query) or die(mysqli_error($database));
        while($row = mysqli_fetch_array($result)){
            if($row['email'] == $email && $row['passwordKey'] == $pass){
                $GLOBALS['userInformations'] = new User(
                                            $row['idUser'],
                                            $row['username'],
                                            $row['email'],
                                            $row['passwordKey'],
                                            $row['accountType'],
                                            $row['profilename'],
                                            $row['biograph'],
                                            $row['profileimage']
                );
                return true;
            }
        }
        return false;
    }

    function doLogin(){
        session_start();
        $user = $GLOBALS['userInformations'];
        $logsLogin = fopen("../logs/logsLogin.txt","a+");
        fwrite($logsLogin, "Usuário -> ".$user->getUserName().", do Email -> ".$user->getEmail()." Esta fazendo login -> ".date(DATE_RFC822)."\n");
        fclose($logsLogin);
        $_SESSION['loginUser'] = serialize($user);
        echo "<script>
                alert('Logado com sucesso! Redirecionando para a página principal...');
                window.location.href = '../index.php';
              </script>";
    }
    

    function loginNotAuthenticated(){
        echo "<script>
                alert('o Email e Senha informados não batem, redirecionando para a página principal...');
                window.location.href = '../index.php';
              </script>";
    }

    if(!empty($_POST['submit'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']); 
        if(authenticateLogin($email,$password,$dataBase)){
            doLogin();
        }
        else{
            loginNotAuthenticated();
        }
    }

?>