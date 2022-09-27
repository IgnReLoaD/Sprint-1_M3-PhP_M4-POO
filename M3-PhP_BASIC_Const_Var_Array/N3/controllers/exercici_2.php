<!-- 
    ENUNCIAT:

    Escriu un programa en PHP que compta el nombre total de 
    vegades que un valor existeix en l'array.
  -->

      <!-- instruccions PhP  -->
<?php

    function cercar($array,$valor){
        $i=0;
        foreach($array as $item){
            if ($valor === $item) {
                $i++;
            }
        }        
        return $i;
    }

    // entrada de dades 
    echo '<b>EXERCICI-2</b> <br><br>';

    if ( !empty($_POST['inpCadena']) && !empty($_POST['inpBuscar'])) {
        $strCadena = $_POST['inpCadena'];
        $strBuscar = $_POST['inpBuscar'];
        
        // llogica de dades
        $intRepeticions = cercar($strCadena,$strBuscar);
        $missatge = "Apareix <span>" . strval($intRepeticions) . "</span> vegades. <br>";

        // sortida de dades
        echo $missatge;
    }
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpBuscar">Valor a buscar:</label>
    <input type="text" id="inpBuscar" name="inpBuscar">
    <br>
    <br>
    <input type="submit" value="buscar repeticions">
    <br> 
    <br>   
</form>
