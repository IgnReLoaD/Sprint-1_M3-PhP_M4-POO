<?php

    // l'arxiu model té la Classe amb Mètodes i Model de dades definit per PockerDice
    require './Models/PokerDiceModel.php';
    
    function shot(){
        echo 'entrem a PokerDiceController::shot <br>';
        $objDICE = new PokerDice;
        return $objDICE->throw();
        // return $objDICE->shapeName();
    }

?>