<?php

    class GamePoker{
        // atributs
        private $_intThrows = 0;        
        private $_intTotalThrows = 0;  
        
        public $_resultDice = "";
        public $_resultThrow = array("","","","","");

        // no necessita constructor

        // setters-getters (nom cara)
        public function getResult(){
            return $this->_resultThrow;
        }  

        public function play($intMaxDices){

            echo 'Entrem a GamePokerModel->play(' . $intMaxDices . ') <br>';

            // bucle per tirar els 5 daus (o els que siguin)
            for ($dice=1; $dice==$intMaxDices; $dice++) {
                $this->_intThrows += 1;
                // shot() ens fa: instancia ojbDICE, executa throw(), shapeName() i retorna la cara del dau
                $this->_resultDice = shot();  

                // aquesta cara l'hem de Guardar dins l'array a la posició del dau corresponent (1 al 5)
                // Teoria: sintaxis de array_splice( $arrOriginal, pos, lenght, $valueToInsert );
                array_splice( $this->_resultThrow, $dice-1, 0, $this->_resultDice);
            }
            // comptador de Throws (tirades)
            $this->_intThrows += 1;     
            return $this->getResult();       
        }        

        public function getThrows(){
            return $this->_intThrows;
        }

        public function getTotalThrows(){
            return $this->_intTotalThrows;
        }
       
    }

?>
