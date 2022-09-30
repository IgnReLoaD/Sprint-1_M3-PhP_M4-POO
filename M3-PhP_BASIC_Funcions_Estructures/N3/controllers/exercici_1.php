<!-- 
    ENUNCIAT:
    La criba d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
    Basant-te en la informació de l'enllaç adjunt, implementa la criba d'Eratòstenes dins d'una funció, 
    de tal forma que puguem invocar la funció per a un número concret.

    Enllaç:  https://es.wikipedia.org/wiki/Criba_de_Erat%C3%B3stenes
  -->

    <!-- instruccions PhP  -->
<?php
    echo '<b> EXERCICI-1 Eratóstenes</b> <br><br>';

    // funcions 
    function esPrimer($n){
        $c=0;
        for ($j=2;$j<=$n;$j++){
            if ($n%$j==0){
                ++$c;
                if ($c>1) return false;                
            }
        }
        return true;
    }

    function eratostenes($num){
        $strLlistat = "nums Primers menors a num Natural (positiu) " . $num . ":<br><br>";

        for ($i=0;$i<$num;$i++){        
            if ($i<=1){
                $strLlistat .= '<del>'.$i.'</del> ';
            }else if (esPrimer($i)) {
                $strLlistat .= '<span>' . $i . '</span> ';
            }else{
                $strLlistat .= '<del>'.$i.'</del> ';
            }
        }
        return $strLlistat;
    }

    if ( !empty($_POST['inpNumero']) ) {

        // entrada de dades
        $intNumero = intval($_POST['inpNumero']);    

        // llogica de dades
        $strCriba = eratostenes($intNumero);        
        unset($_POST);
        
        // sortida de dades        
        echo 'La Criba resultant: <br><br>' . $strCriba . '<br><br> ¿Que era fácil? <span>Házlo tu!!</span> <br><br>';
    }

?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpNumero">Entra un número natural: </label>
    <input type="number" id="inpNumero" name="inpNumero" value="1" min="1" max="200">    
    <br>
    <br>
    <input type="submit" value=" Criba Eratóstenes ">
    <br> 
    <br>     
</form>
