<?php

    class Employee {
        // zona atributs
        private string $_nom;
        private int $_sou;

        // 1a-zona: mètode Constructor "initialize"
        public function initialize($nom,$sou){
            // atributs = estat
            $this->_nom = $nom;
            $this->_sou = $sou;
        }

        // 2a-zona: mètodes input-output (setters-getters)
        public function getLlegirNom(){
            return $this->_nom;
        }
        public function setGrabarNom($nom){
            $this->_nom = $nom;
        }

        // 3a-zona: mètodes ToString "print"
        public function print(){
            $msg =  ' EMPLOYEE DATA FILE <br>';
            $msg .= ' __________________ <br>'; 
            $msg .= ' ' .  $this->getLlegirNom() .  '<br>';
            echo $msg;
            // if ($this->sou > 6000){
            //     echo 'Must pay taxes 💰';
            // }else{
            //     echo 'exempt from paying taxes 😎';
            // }
        }

        // 4a-zona: mètodes Específics
        public function pagar(){
            if ($this->_sou > 6000){
                echo 'Must pay taxes 💰';
            }else{
                echo 'exempt from paying taxes 😎';
            }
        }

    }

?>