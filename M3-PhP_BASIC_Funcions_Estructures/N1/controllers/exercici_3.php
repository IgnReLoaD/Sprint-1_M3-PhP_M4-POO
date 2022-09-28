<!-- 
    ENUNCIAT:

    Imagina't que volem que compti fins a un nombre diferent de 10. 
    Programa la funció perquè el final del compte estigui parametritzat.

    ... fa referència al Exercici-2:
        Per jugar a l'"amagatall" se'ns ha demanat un programa que compti fins a 10. 
        Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. 
        Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.
  -->

    <!-- instruccions PhP  -->
<?php

    function comptar2($intMaxim){         
        // echo 'Debug: variable intMaxim=' . $intMaxim . '<br>';
        $strMsg = '';             
        for($i=0; $i<=$intMaxim; $i+=2){            
            if ($i<=$intMaxim) $strMsg .= strval($i) . ', ';            
            // if ($i==$intMaxim) $strMsg .= '<span> YA!! </span>';
        }
        return $strMsg .= '<span> YA!! </span>';
    }
    
    // entrada de dades 
    echo '<b>EXERCICI-3</b> <br><br>';
    if ( !empty($_POST['inpValorMax']) ) {
        $strValor = $_POST['inpValorMax'];         

        // llogica de dades
        $strResul = comptar2(intval($strValor));        

        // sortida de dades
        echo $strResul . "<br><br>";
    }
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpValorMax">Comptem fins 10 o més</label>
    <input type="number" id="inpValorMax" name="inpValorMax" min="10" max="99">
    <br>
    <br>
    <input type="submit" value="comptar">
    <br> 
    <br>   
  
</form>

