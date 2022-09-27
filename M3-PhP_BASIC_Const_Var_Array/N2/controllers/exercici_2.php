<!-- 
    ENUNCIAT:

    Escriu un programa PHP per intercanviar el primer i últim caràcter 
    d'una cadena donada, i imprimeix la nova cadena. Exemple:

    Entrada:
      wxyz
      a
      ab
    Sortida:
      zxyw
      a
      ba
  -->

      <!-- instruccions PhP  -->
<?php

    function intercanvi($paraula){
        if (strlen($paraula) <= 1) {
            $resul = $paraula;
        }else{
            $inici = substr($paraula, 0, 1);
            $final = substr($paraula,-1, 1);
            $resul = substr_replace($paraula,$inici,-1, 1);
            $resul = substr_replace($resul,$final, 0, 1);
        }
        return $resul;
    }

    // entrada de dades 
    echo '<b>EXERCICI-2</b> <br><br>';

    if ( !empty($_POST['inpCadena']) ) {
        $strCadena = $_POST['inpCadena'];
        
        // llogica de dades
        $missatge = "<span>" . intercanvi($strCadena) . "</span> <br>";

        // sortida de dades
        echo $missatge;
    }
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpCadena">Paraula:</label>
    <input type="text" id="inpCadena" name="inpCadena" placeholder="escriu...">
    <br>
    <br>
    <input type="submit" value="intercanvi">
    <br> 
    <br>   
</form>
