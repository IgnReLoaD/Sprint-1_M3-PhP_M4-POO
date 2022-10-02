<?php

    class PokerDice{
        // atributs
        private $_facesDice = array("♠️", "K", "Q", "J", "7", "8");    
        private $_awardFace;

        // no necessita constructor

        // setters-getters (nom cara)
        public function shapeName(){
            return $this->_facesDice[$this->_awardFace];
        }        
        public function setAwardFace($shape){
            $this->_awardFace = $shape;
        } 

        public function throw() {
            echo 'entrem a PokerDiceModel -> throw() <br>';
            $this->setAwardFace(array_rand($this->_facesDice, 1));
            return $this->shapeName();
        }

        public function toString() {
            echo 'Ha tocat la cara del dau: ' . $this->shapeName() . ' !!<br>';
        }
    }

?>
