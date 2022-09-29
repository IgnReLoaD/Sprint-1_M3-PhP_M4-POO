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

        // comprobem any demanat sigui de olimpiada, sino mirem el seguent
        while( ($ini%4) != 0) {
            $ini++;            
        }
        // posarem al array els anys des del qual s'ha demant fins avui (prenem 2016 com actual)
        $arrEdiciones = array();
        for ($i = $ini; $i <= $fin; $i += 4){
            array_push($arrEdiciones,$i);
        }
        return $arrEdiciones;
    }

    // entrada de dades (no n'hi ha) ... però i deixarem indicar any de partida:
    echo '<b>EXERCICI-1</b> <br><br>';
    // $intAnyInicial = 2016;
    if ( !empty($_POST['inpDesde']) ) {
        $intAnyInicial = intval($_POST['inpDesde']);    
    
        // llogica de dades
        $arrIntOlimpic = ediciones($intAnyInicial,2016);
        $arrStrOlimpic = array_map('callbackConvertirText',$arrIntOlimpic);
        unset($_POST);
        
        // sortida de dades
        echo '<pre>';
        echo 'Anys olímipcs (numero): <br>';
        print_r($arrIntOlimpic);
        echo 'Anys olímipcs (textes): <br>';
        print_r($arrStrOlimpic);
        echo '</pre>';
    }

?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpDesde">ANYS OLIMPICS:<br>Fins a 2016, a partir de quan vulguis...<br> &nbsp; ... escull el tall entre 1960-2016:</label>
    <input type="number" id="inpDesde" name="inpDesde" value="" min="1960" max="2016">
    <br>
    <br>
    <input type="submit" value=" mostrar edicions ">
    <br> 
    <br>     
</form>
