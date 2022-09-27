<!-- 
    ENUNCIAT:

    $ X = array (10, 20, 30, 40, 50);

    Elimina un element de l’array anterior. 
    Després d'eliminar l'element, les claus senceres han de ser normalitzades.

    Per example: Eliminant el número 40
    Sortida
    array(5) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(40) [4]=> int(50) }
    array(4) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(50) }
  -->

      <!-- instruccions PhP  -->
<?php

    function eliminar($array,$valor){
        return array_values(array_diff($array, array($valor)));        
    }

    // entrada de dades 
    echo '<b>EXERCICI-3</b> <br><br>';
    echo 'Donat aquest Array [10, 20, 30, 40, 50] <br><br>';
    $X = array(10,20,30,40,50);

    if ( !empty($_POST['selValor']) ) {
        // llogica de dades
        $valorEliminar = $_POST['selValor'];
        $arrResult = eliminar($X,$valorEliminar);            

        // sortida de dades
        echo 'Array resultant: <span>' . print_r($arrResult) . '</span> <br><br>';
    }

?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">  
    <label for="selValor">Escull:</label>
    <select id="selValor" name="selValor">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40" selected>40</option>
        <option value="50">50</option>
    </select>  
    <br>
    <br>
    <input type="submit" value="eliminar el seleccionat">
    <br> 
    <br>   
</form>
