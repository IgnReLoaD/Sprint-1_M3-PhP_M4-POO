<!-- 
    ENUNCIAT:

    Per prevenir oblits en utilitzar la nostra meravellosa opció "amagatall" establirem 
    un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.

    ... fa referència al Exercici-2:
        Per jugar a l'"amagatall" se'ns ha demanat un programa que compti fins a 10. 
        Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. 
        Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.
  -->

    <!-- instruccions PhP  -->
<?php

    // valor per defecte =10 però agafarà el valor que li passem, si li passem.
    function comptar3($intMaxim = 10){                 
        $strMsg = '';             
        for($i=0; $i<=$intMaxim; $i+=2){            
            if ($i<=$intMaxim) $strMsg .= strval($i) . ', ';                        
        }
        return $strMsg .= '<span> YA!! </span>';
    }
    
    // entrada de dades 
    echo '<b>EXERCICI-4</b> <br><br>';
    if ( !empty($_POST['inpValorMax']) ) {
        $strValor = $_POST['inpValorMax'];         

        // llogica de dades
        $strResul = comptar3(intval($strValor));                
    }else{
        // llogica de dades
        $strResul = comptar3();
    }
    // sortida de dades
    echo $strResul . "<br><br>";
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpValorMax">Comptem fins a (10 per defecte):</label>
    <input type="number" id="inpValorMax" name="inpValorMax" min="10" max="99">
    <br>
    <br>
    <input type="submit" value="comptar">
    <br> 
    <br>   
  
</form>

