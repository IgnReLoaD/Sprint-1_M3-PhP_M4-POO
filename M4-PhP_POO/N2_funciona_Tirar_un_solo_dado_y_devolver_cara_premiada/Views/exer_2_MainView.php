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
    require './Controllers/PokerDiceController.php';

    echo ' &nbsp; <b> POO Nivell-2 EXER-1 PockerDice (Herència subclasses)</b> <br><br>';    

    // $shot = 1;

    if ( !empty($_POST['inpShot']) && ($_POST['inpShot'] < "5") ) {

        // entrada de dades
        $intShot = $_POST['inpShot'];

        // llogica de dades
        $strShot = shot();
        unset($_POST);

        // sortida de dades
        echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span> ' . $strShot . ' </span>';
    }

?>

    <!-- renderitzat Html  -->    
    <form action="index.php" method="post">
        <br>
        &nbsp; &nbsp; <label for="inpShot">Torn de jugada... &nbsp; </label>
        <!-- <input type="number" id="inpShot" name="inpShot" value="<?php $shot ?>" readonly> -->
        <input type="number" id="inpShot" name="inpShot" value="1" readonly>
        <br>        
        <br>
        &nbsp; &nbsp; &nbsp; <input type="submit" value=" Tirar! ">
        <br> 
        <br>     
    </form>
