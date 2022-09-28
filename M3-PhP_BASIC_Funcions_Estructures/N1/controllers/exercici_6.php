<!-- 
    ENUNCIAT:

    Charlie em va mossegar el dit!
    Charlie et mossegarà el dit exactament el 50% del temps.
    Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
    Consell: pot ser que la funció rand () et resulti útil.
  -->

    <!-- instruccions PhP  -->
<?php

    function isBitten(){                 
        $intAleatori = rand(0,100);
        echo 'Probabilitat del ' . $intAleatori . '% <br>';
        return ($intAleatori >= 50) ? true : false;
    }    
    
    // entrada de dades (no n'hi ha)
    echo '<b>EXERCICI-6</b> <br><br>';

    // llogica de dades
    $strResul = isBitten();
    
    // sortida de dades
    echo ($strResul) ? "En Charlie <span>si</span> m'ha mossegat!<br><br>" : "En Charlie <span>no</span> m'ha mossegat.<br><br>";
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <!-- <label for="inpProbable">Probabilitats (0-100%):</label>
    <input type="number" id="inpProbable" name="inpProbable" min="0" max="100"> -->
    <br>
    <br>
    <input type="submit" value=" mossegada? ">
    <br> 
    <br>   
  
</form>

