<?php

    class GamePoker{
        // atributs
        private $_intThrows = 0;        
        private $_intTotalThrows = 0;  
        
        public $_strResultDice = "";
        // public $_arrResultShot = array("","","","","");   ... per fer servir amb el splice
        public $_arrResultShot = array();

        // no necessita constructor

        // setters-getters (per grabar-llegir en array de Resultats tirada actual)
        public function getResultShot(){
            return $this->_arrResultShot;
        }  
        public function setResultShot($strValue){
            array_push( $this->_arrResultShot, $strValue );            
        }
        public function getResultDice(){
            return $this->_strResultDice;
        }
        public function setResultDice($strValue){
            $this->_strResultDice = $strValue;
        }

        // funcions específiques:
        public function play($intMaxDices){

            echo '<br> B - ... ENTREM $intGamesToPlay vegades a GamePokerModel->play($intMaxDices=' . $intMaxDices . ') <br>';

            // bucle per tirar els 5 daus (o els que siguin)
            for ($dice=1; $dice<=$intMaxDices; $dice++) {
                $this->_intThrows += 1;
                // shot() ens fa: instancia ojbDICE, executa throw(), shapeName() i retorna la cara del dau
                // $this->_strResultDice = shot();  
                $this->setResultDice(shot());

                // aquesta cara l'hem de Guardar dins l'array a la posició del dau corresponent (1 al 5)
                // Teoria: sintaxis de array_splice( $arrOriginal, pos, lenght, $valueToInsert );
                // array_splice( $this->_resultThrow, $dice-1, 0, $this->_resultDice);  ... no m'agrada, desplaça els espais buits
                                
                // array_push( $this->_arrResultShot, $this->_strResultDice );
                $this->setResultShot($this->getResultDice());
            }

            // DEBUG:
            $arrResult = $this->getResultShot();
            echo '<pre>';
            var_dump($arrResult);
            echo '</pre>';

            // comptador de Throws (tirades)
            $this->_intThrows += 1;     

            return $this->getResultShot();       
        }        

        public function getThrows(){
            return $this->_intThrows;
        }

        public function getTotalThrows(){
            return $this->_intTotalThrows;
        }
       
    }

?>
