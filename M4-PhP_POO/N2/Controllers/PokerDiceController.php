<?php

    // l'arxiu model té la Classe amb Mètodes i Model de dades definit per PockerDice
    require './Models/PokerDiceModel.php';
    
    function shot(){
        echo 'entrem a PokerDiceController <br>';
        $objDICE = new PokerDice;
        $objDICE->throw();
        return $objDICE->shapeName();
    }

?>