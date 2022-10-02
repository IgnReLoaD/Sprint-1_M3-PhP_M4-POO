<!-- 
    ENUNCIAT:
    Crea un projecte Bancs, afegeix al projecte una classe Account amb atributs per: 
    - número de compte
    - nom i cognoms del client/a 
    - el saldo actual. 

    Defineix en la classe els següents mètodes:

    - Constructor que inicialitzi els atributs.
    - Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
    - Crea el mètode withdraw($amount) que permet retirar una quantitat del compte sempre que hi hagi saldo, 
      si no n'hi ha, el mètode haurà de retornar un missatge d'error.
    - Getters i Setters.
    
    Crea una petita interfície amb ajuda d'HTML I CSS que permeti ingressar una quantitat i dipositar o retirar el saldo del compte.
    Fes les validacions pertinents per assegurar que la quantitat ingressada per l'usuari/ària és correcta.
-->

<?php
    // l'arxiu controller té els mètodes-funcions específiques per PokerDice
    require './Controllers/GamePokerController.php';
    require './Controllers/PokerDiceController.php';

    echo ' &nbsp; <b> POO Nivell-3 EXER-1 Bancos (Herència subclasses)</b> <br><br>';    

    // $shot = 1;

    if ( !empty($_POST['inpTurns']) && !empty($_POST['inpDices']) ) {

        // entrada de dades
        $intTurns = $_POST['inpTurns'];
        $intDices = $_POST['inpDices'];
        echo 'Torns/jugades: ' . $intTurns . '<br>';
        echo 'Daus per torn: ' . $intDices . '<br>';

        // llogica de dades
        $arrScore = turn($intTurns,$intDices);
        unset($_POST);

        // sortida de dades
        echo '<pre>';
        echo '&nbsp; &nbsp; &nbsp; &nbsp; <span>' . var_dump($arrScore) . '</span>';
        echo '</pre>';
        // echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span> ' . $strScore . ' </span>';
    }

?>

    <!-- renderitzat Html  -->    
    <form action="index.php" method="post">
        <br>
        &nbsp; &nbsp; <label for="inpTurns">Número de torns/jugades (1-9): </label>
        <!-- <input type="number" id="inpShot" name="inpShot" value="<?php $shot ?>" readonly> -->
        <input type="number" id="inpTurns" name="inpTurns" value="5" min="1" max="9">
        <br>        
        &nbsp; &nbsp; <label for="inpDices">Número de daus per torn (1-5): </label>        
        <input type="number" id="inpDices" name="inpDices" value="5" min="1" max="5">
        <br>
        <br>
        &nbsp; &nbsp; &nbsp; <input type="submit" value=" Tirar! ">
        <br> 
        <br>     
    </form>
