<!-- 
    ENUNCIAT:
    Ens han demanat un llistat de cada any on es van produir jocs 
    olímpics des de 1960 inclòs fins al 2016. 
    Programa un bucle que calculi i mostri per pantalla els anys 
    olímpics dins de l'interval esmentat.
  -->


    <!-- instruccions PhP  -->
<?php
    // funcions
    function callbackConvertirText($num) {
        return('Edició del: ' . strval($num));
    }

    function ediciones($ini,$fin){
        $arrEdiciones = array();
        for ($i = $ini; $i <= $fin; $i += 4){
            array_push($arrEdiciones,$i);
        }
        return $arrEdiciones;
    }

    // entrada de dades (no n'hi ha)
    echo '<b>EXERCICI-1</b> <br><br>';

    // llogica de dades
    $arrIntOlimpic = ediciones(1960,2016);
    $arrStrOlimpic = array_map('callbackConvertirText',$arrIntOlimpic);
    
    // sortida de dades
    echo '<pre>';
    echo 'Anys olímipcs (numero): <br>';
    print_r($arrIntOlimpic);
    echo 'Anys olímipcs (textes): <br>';
    print_r($arrStrOlimpic);
    echo '</pre>';

?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpDesde">Anys Olímpics (1960-2016)</label>
    <input type="number" id="inpDesde" name="inpDesde" value="1960" readonly>
    <br>
    <br>
    <input type="submit" value=" mostrar edicions ">
    <br> 
    <br>     
</form>
