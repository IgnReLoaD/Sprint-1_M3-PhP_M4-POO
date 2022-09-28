<!-- 
    ENUNCIAT:

    Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

    Condicions:

    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.
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

