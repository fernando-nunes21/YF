<?php

    session_start();
    require_once "../includes/bankConnection.php";
    require_once "../class/User.php";

    $userInformations = unserialize($_SESSION['loginUser']);

    function getImageFileName($userInformations){
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
            $profileImageName = $userInformations->getProfileImage();
        }
        return $profileImageName;
    }

    function updateClientInDatabase($dataBase, $userClient){
        $query = "UPDATE Users SET
                    username = '".$userClient->getUsername()."',
                    email = '".$userClient->getEmail()."',
                    passwordKey = '".$userClient->getPassword()."',
                    accountType = '".$userClient->getAccountType()."',
                    profilename = '".$userClient->getProfileName()."',
                    biograph = '".$userClient->getBiograph()."',
                    profileimage = '".$userClient->getProfileImage()."'
                    WHERE idUser = ".$userClient->getIdUser().";";
        mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
        echo "<script> 
                alert('Conta Atualizada com Sucesso! Redirecionando...');
                window.location.href = '../includes/userProfile.php';
                </script>";
        $_SESSION['loginUser'] = serialize($userClient);
    }

    function deleteAllMusicsFromClientDatabase($dataBase, $userId){
        $query = "DELETE FROM Musics WHERE User_iduser = ".$userId;
        mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
    }

    function deleteClientInDatabase($dataBase,$userId){
        deleteAllMusicsFromClientDatabase($dataBase,$userId);
        $query = "DELETE FROM Users WHERE idUser = ".$userId;
        mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
        unset($_SESSION['loginUser']); 
        echo "<script> 
                alert('Conta deletada com sucesso! Redirecionado a página incial');
                window.top.location.href = '../index.php';
                </script>";
        
    }

    if(!empty($_POST['update'])){
        $profileImage = getImageFileName($userInformations);
        $updateUser = new User( $userInformations->getIdUser(),
                                $_POST['username'],
                                $_POST['email'],
                                md5($_POST['password']),
                                "client",
                                $_POST['profilename'],
                                $_POST['biograph'],
                                $profileImage);
        updateClientInDatabase($dataBase,$updateUser);
    }

    if(!empty($_POST['delete'])){
        deleteClientInDatabase($dataBase,$userInformations->getIdUser());      
    }

?>