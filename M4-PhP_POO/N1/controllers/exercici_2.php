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

    echo '<b> EXERCICI-2 Shape (Herència subclasses)</b> <br><br>';

    if ( !empty($_POST['inpBase'])  &&  !empty($_POST['inpHigh']) ) {

        // entrada de dades
        $intBase = intval($_POST['inpBase']);    
        $intHigh = intval($_POST['inpHigh']);
        $strFig1 = "Rectangle";
        $strFig2 = "Triangle";

        // llogica de dades - number_format(($floTotCost/1.1),2)
        $strMsg1 = "L'àrea del teu Rectangle (b*h)  = <b>" . strval(number_format(drawShape($strFig1,$intBase,$intHigh),2)) . "m<sup>2</sup> </b>. <br>";
        $strMsg2 = "L'àrea del teu Triangle (b*h/2) = <b>" . strval(number_format(drawShape($strFig2,$intBase,$intHigh),2)) . "m<sup>2</sup> </b>. <br>";        

        // sortida de dades
        echo $strMsg1 . $strMsg2 . '---------------------------------------------------<br>';
    }

?>

    <!-- renderitzat Html  -->    
    <form action="index.php" method="post">
        <br>
        <label for="inpBase">Entra la base (1-9): &nbsp; </label>
        <input type="number" id="inpBase" name="inpBase" min="1" max="9">    
        <br>
        <label for="inpHigh">Entra l'altura (1-9): &nbsp; </label>
        <input type="number" id="inpHigh" name="inpHigh" min="1" max="9">
        <br>
        <br>
        <input type="submit" value=" Calcular Àrees ">
        <br> 
        <br>     
    </form>
