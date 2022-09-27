<!-- 
    ENUNCIAT:

    Programa una funció que, donat un número qualsevol (per exemple, la teva edat) 
    ens digui si és parell o imparell mitjançant un missatge per pantalla.
  -->

    <!-- instruccions PhP  -->
<?php

    function esParell($numero){        
        ($numero % 2) ? false : true;        
    }
    
    // entrada de dades 
    echo '<b>EXERCICI-1</b> <br><br>';
    if ( !empty($_POST['inpValor']) ) {
        $intValor = $_POST['inpValor'];

        // llogica de dades
        if (esParell($intValor)){
            $result = 'parell';
        }else{
            $result = 'imparell';
        }

        // sortida de dades
        echo "L'edat entrada és <span>" . $result . "</span>.<br><br>";
    }
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpValor">La teva edat (10-99):</label>
    <input type="number" id="inpValor" name="inpValor" min="10" max="99">
    <br>
    <br>
    <input type="submit" value="es parell?">
    <br> 
    <br>   
  
</form>

