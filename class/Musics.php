<?php

    class Musics{
        private $idMusic;
        private $name;
        private $file;
        private $author;
        private $imageUrl;
        private $idUser;
        private $idGender;
        
        function Musics($idMusic,$name,$file,$author,$imageUrl,$idUser,$idGender){
            $this->idMusic = $idMusic;
            $this->name = $name;
            $this->file = $file;
            $this->author = $author;
            $this->imageUrl = $imageUrl;
            $this->idUser = $idUser;
            $this->idGender = $idGender;
        }

        function getIdMusics(){
            return $this->idMusic;
        }

        function getName(){
            return $this->name;
        }

        function getFile(){
            return $this->file;
        }

        function getAuthor(){
            return $this->author;
        }

        function getImageUrl(){
            return $this->imageUrl;
        }

        function getIdUser(){
            return $this->idUser;
        }

        function getIdGender(){
            return $this->idGender;
        }
    }

?>