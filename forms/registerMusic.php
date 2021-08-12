<?php
    session_start();
    require_once "../includes/bankConnection.php";
    require_once "../class/User.php";
    require_once "../class/Musics.php";

    $userInformations = unserialize($_SESSION['loginUser']);

    function getImageFileName(){
        if($_FILES["imagefile"]["name"] != ""){
            $file = $_FILES["imagefile"];
            $ext = explode(".", $file["name"]);
            $newName = md5(uniqid(time())) . "." . $ext[1];
            if(sizeof($ext)>2){
                $profileImageName = "pic_error.png";
            } else{
                $image_dir = "../images/albuns/" . $newName;
                move_uploaded_file($file["tmp_name"], $image_dir);
                $profileImageName = $newName;
            }
        } else {
            $profileImageName = "pic_error.png";
        }
        return $profileImageName;
    }

    function getMusicFileName(){
        if($_FILES["filename"]["name"] != ""){
            $file = $_FILES["filename"];
            $ext = explode(".", $file["name"]);
            $newName = md5(uniqid(time())) . "." . $ext[1];
            if(sizeof($ext)>2){
                echo "<script> alert('Impossível adicionar essa música, formato nome invalido'); 
                var frameElement = document.getElementById('pageContent');
                frameElement.contentWindow.location.href = '../includes/home.php'; </script>";
            } else{
                $music_dir = "../media/" . $newName;
                move_uploaded_file($file["tmp_name"], $music_dir);
                $musicName = $newName;
            }
        } else {
            echo "<script> alert('Impossível adicionar essa música, formato nome/extensão invalidos'); 
                var frameElement = document.getElementById('pageContent');
                frameElement.contentWindow.location.href = '../includes/home.php'; </script>";
        }
        return $musicName;
    }

    function addMusicToDatabase($dataBase,$music){
        $query = "INSERT INTO Musics VALUES(NULL,
                                            '".$music->getName()."',
                                            '".$music->getFile()."',
                                            '".$music->getAuthor()."',
                                            '".$music->getImageUrl()."',
                                            ".$music->getIdUser().",
                                            ".$music->getIdGender().")";
        mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
        echo "<script> alert('Musica adicionada com sucesso!'); 
                var frameElement = document.getElementById('pageContent');
                frameElement.contentWindow.location.href = '../includes/home.php'; </script>";
    }

    if(!empty($_POST['cadastrar'])){
        $idUser = $userInformations->getIdUser();
        $imageFile = getImageFileName();
        $musicFile = getMusicFileName();
        $music = new Musics(NULL,
                            $_POST['musicname'],
                            $musicFile,
                            $_POST['authorname'],
                            $imageFile,
                            $idUser,
                            $_POST['gender']);
        addMusicToDatabase($dataBase,$music);
    }
?>