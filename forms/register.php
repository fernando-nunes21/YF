<?php

    require_once '../includes/bankConnection.php';
    include '../class/User.php';

    function getImageFileName(){
        if($_FILES["profileimage"]["name"] != ""){
            $file = $_FILES["profileimage"];
            $ext = explode(".", $file["name"]);
            $newName = md5(uniqid(time())) . "." . $ext[1];
            if(sizeof($ext)>2){
                $profileImageName = "perfil_padrao.png";
            } else{
                $image_dir = "../images/" . $newName;
                move_uploaded_file($file["tmp_name"], $image_dir);
                $profileImageName = $newName;
            }
        } else {
            $profileImageName = "perfil_padrao.png";
        }
        return $profileImageName;
    }

    function registerClientInDatabase($dataBase, $userClient){
        $query = "INSERT INTO Users VALUES (NULL,
                                        '".$userClient->getUsername()."',
                                        '".$userClient->getEmail()."',
                                        '".$userClient->getPassword()."',
                                        '".$userClient->getAccountType()."',
                                        '".$userClient->getProfileName()."',
                                        '".$userClient->getBiograph()."',
                                        '".$userClient->getProfileImage()."'
                                        );";
        mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
        echo "<script> 
                alert('Conta Cadastrada com sucesso! Agora é so logar!');
                window.location.href = '../index.php';
                </script>";
    }

    function verifyEmailAlreadyExists($email,$dataBase){
        $query = "SELECT * FROM Users";
        $result = mysqli_query($dataBase,$query);
        while($row = mysqli_fetch_array($result)){
            if($row['email'] == $email){
                return true;
            }
        }
        return false;
    }
    
    if(!empty($_POST['submit'])){
        if(verifyEmailAlreadyExists($_POST['email'],$dataBase)){
            echo "<script> 
                alert('Email já cadastrado no nosso sistema, por favor tente novamente com outro email');
                window.location.href = '../index.php';
                </script>";
        } else{
            $profileImageName = getImageFileName();
            $userClient = new User(NULL,
                                $_POST['username'],
                                $_POST['email'],
                                md5($_POST['password']),
                                "client",
                                $_POST['profilename'],
                                $_POST['biograph'],
                                $profileImageName);
            registerClientInDatabase($dataBase, $userClient);
        };  
    }
?>