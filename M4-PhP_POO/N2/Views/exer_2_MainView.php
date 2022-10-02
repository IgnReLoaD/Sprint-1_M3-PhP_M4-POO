<!-- 
    ENUNCIAT:
    - Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
    - Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, 
        genera un valor aleatori per a l'objecte a què se li aplica el mètode.
    - Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
    - Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
    - A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.
-->

<?php
    // l'arxiu controller té els mètodes-funcions específiques per PokerDice
    require './Controllers/GamePokerController.php';
    require './Controllers/PokerDiceController.php';

    echo ' &nbsp; <b> POO Nivell-2 EXER-1 PockerDice (Herència subclasses)</b> <br><br>';    

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
