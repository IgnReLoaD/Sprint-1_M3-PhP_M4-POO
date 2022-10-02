<?php

    // l'arxiu model té la Classe amb Mètodes i Model de dades definit per GamePoker
    require './Models/GamePokerModel.php';
    
    // funció que executa el Torn del jugador, llançant els X daus, i retornant un array
    //  p.ex.: $_resultThrow = array("K","9","J","Q","J");

    function turn($intGamesToPlay,$intDicesPerTurn){
        
        echo 'entrem a GamePokerController::turn() <br>';
        $arrScore = array();

        for ($i=1; $i<=$intGamesToPlay; $i++){
            $objGAME = new GamePoker;
            // $objGAME->play($intDicesPerTurn);
            array_push($arrScore,$objGAME->play($intDicesPerTurn));
        }        

        return $arrScore;
    }

?>