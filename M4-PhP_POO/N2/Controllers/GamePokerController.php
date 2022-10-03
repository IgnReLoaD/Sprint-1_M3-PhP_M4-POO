<?php

    // l'arxiu model té la Classe amb Mètodes i Model de dades definit per GamePoker
    require './Models/GamePokerModel.php';
    
    // funció que executa el Torn del jugador, llançant els X daus, i retornant un array
    //  p.ex.: $_resultThrow = array("K","9","J","Q","J");

    function turn($intGamesToPlay,$intDicesPerTurn){
        
        echo '<br> A - ENTREM UNA SOLA VEGADA AL GamePokerController::turn($intGamesToPlay=' . $intGamesToPlay . ') <br><br>';
        $arrScore = array();

        for ($i=1; $i<=$intGamesToPlay; $i++){
            $objGAME = new GamePoker;
            // $objGAME->play($intDicesPerTurn);
            array_push($arrScore,$objGAME->play($intDicesPerTurn));
        }        

        return $arrScore;
    }

?>