<!-- 
    ENUNCIAT:

    Escriure un programa PHP per calcular la suma dels dos valors enters donats. 
    Si els dos valors són iguals, torna el doble de la seva suma.
    Exemple:

    Entrada
    1, 2
    3, 2
    2, 2
    Sortida
    3
    5
    8
  -->

    <!-- instruccions PhP  -->
<?php

    function calcular($val1,$val2){
        $sumatori = $val1 + $val2;
        $missatge = "La suma és " . $sumatori . "<br>";
        if ($val1 == $val2) {
            $doblarem  = $sumatori *2;
            $missatge .= "El doble de la suma és " . $doblarem . "<br>";
        }
        return $missatge;
    }

    // entrada de dades 
    echo '<b>EXERCICI-1</b> <br><br>';
    if ( !empty($_POST['inpValor1']) && !empty($_POST['inpValor2']) ) {
        $intValor1 = $_POST['inpValor1'];
        $intValor2 = $_POST['inpValor2'];

        // llogica de dades
        $missatge = "<span>" . calcular($intValor1,$intValor2) . "</span> <br>";

        // sortida de dades
        echo $missatge;
    }
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpValor1">Primer valor (1-9):</label>
    <input type="number" id="inpValor1" name="inpValor1" min="1" max="9">
    <br>
    <label for="inpValor2">Segon valor (1-9):</label>
    <input type="number" id="inpValor2" name="inpValor2" min="1" max="9"> 
    <br>
    <br>
    <input type="submit" value="calcular">
    <br>    
</form>

