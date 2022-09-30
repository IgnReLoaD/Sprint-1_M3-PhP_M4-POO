<!-- 
    ENUNCIAT:
    Escriu un programa que defineixi una classe Shape amb un constructor 
    que rebi com a paràmetres l'ample i alt. 
    Defineix dues subclasses; Triangle i Rectangle que heretin de Shape 
    i que calculin respectivament l'àrea de la forma area().

    A l'arxiu main defineix dos objectes, un triangle i un rectangle 
    i truca al mètode area de cadascun.
-->

<?php
    // l'arxiu controller té els mètodes-funcions específiques per SHAPE
    require 'ShapeController.php';

    if ( !empty($_POST['inpBase'])  &&  !empty($_POST['inpHigh']) ) {

        // entrada de dades
        $intBase = intval($_POST['inpBase']);    
        $intHigh = intval($_POST['inpHigh']);
        $strFig1 = "Rectangle";
        $strFig2 = "Triangle";

        // llogica de dades
        drawShape($strFig1,$intBase,$intHigh);
        drawShape($strFig2,$intBase,$intHigh);

        // sortida de dades
        // ... drawShape() ja mostra per pantalla
    }

?>

    <!-- renderitzat Html  -->
    <b> EXERCICI-2 Shape (main)</b> <br><br>
    <form action="index.php" method="post">
        <label for="inpBase">Entrar la base (1-9): </label>
        <input type="number" id="inpBase" name="inpBase" min="1" max="9">    
        <br>
        <label for="inpHigh">Entra l'altura (1-9): </label>
        <input type="number" id="inpHigh" name="inpHigh" min="1" max="9">
        <br>
        <br>
        <input type="submit" value=" Dibuixar ">
        <br> 
        <br>     
    </form>
