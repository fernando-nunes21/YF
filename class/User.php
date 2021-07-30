<?php

    class User{
        private $idUser;
        private $username;
        private $email;
        private $password;
        private $accountType;
        private $profilename;
        private $biograph;
        private $profileimage;
        
        function __construct($idUser,$username,$email,$pass,$accountType,$profilename,$biograph,$profileimage){
            $this->idUser = $idUser;
            $this->username = $username;
            $this->email = $email;
            $this->password = $pass;
            $this->accountType = $accountType;
            $this->profilename = $profilename;
            $this->biograph = $biograph;
            $this->profileimage = $profileimage;
        }

        function getIdUser(){
            return $this->idUser;
        }

        function getUsername(){
            return $this->username;
        }

        function getEmail(){
            return $this->email;
        }

        function getPassword(){
            return $this->password;
        }

        function getAccountType(){
            return $this->accountType;
        }

        function getProfileName(){
            return $this->profilename;
        }

        function getBiograph(){
            return $this->biograph;
        }

        function getProfileImage(){
            return $this->profileimage;
        }

    }

?>