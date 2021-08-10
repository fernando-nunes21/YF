<?php

    class Gender{
        private $idGender;
        private $name;

        function  __construct($idGender,$name){
            $this->idGender = $idGender;
            $this->name = $name;
        }

        function getIdGender(){
            return $this->idGender;
        }

        function getName(){
            return $this->name;
        }
    }

?>