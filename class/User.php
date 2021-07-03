<?php

    class User{
        private $idUser;
        private $username;
        private $email;
        private $password;
        private $accountType;
        
        function User($idUser,$username,$email,$pass,$accountType){
            $this->idUser = $idUser;
            $this->username = $username;
            $this->email = $email;
            $this->password = $pass;
            $this->accountType = $accountType;
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

    }

?>