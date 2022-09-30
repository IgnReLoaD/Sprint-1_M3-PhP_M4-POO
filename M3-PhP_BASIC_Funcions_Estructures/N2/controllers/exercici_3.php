<!-- 
    ENUNCIAT:
    Imagina que som a una botiga on es ven:

    - Xocolata: 1 euro
    - Xiclets: 0,50 euros
    - Caramels: 1,50 euros

    Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. 
    Per exemple, que si comprem:

    - 2 xocolates, 1 de xiclets i 1 de caramels, 
    tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

    funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

    Sent, per tant, el total, 4.
  -->

    <!-- instruccions PhP  -->
<?php
    echo '<b> EXERCICI-3 </b> <br><br>';

    // funcions amb valors Float (decimals)
    function xocolat($quantitat){
        return $quantitat * floTARIFA_XOCOS;
    }

    function xiclets($quantitat){
        return $quantitat * floTARIFA_XICLE;
    }

    function caramel($quantitat){
        return $quantitat * floTARIFA_CARAM;
    }

    function passarPerCaixa($intXocolat,$intXiclets,$intCaramel) {            
        $floSubTotalXocolat = xocolat($intXocolat);
        $floSubTotalXiclets = xiclets($intXiclets);
        $floSubTotalCaramel = caramel($intCaramel);
        return  (($floSubTotalXocolat + $floSubTotalXiclets + $floSubTotalCaramel) * (1 + floTARIFA_IVA));
    }

    if ( !empty($_POST['inpXocolat']) || !empty($_POST['inpXiclets']) || !empty($_POST['inpCaramel']) ) {

        // entrada de dades
        $intXocolat = intval($_POST['inpXocolat']);    
        $intXiclets = intval($_POST['inpXiclets']);   
        $intCaramel = intval($_POST['inpCaramel']);   
        $floTotCost = 0;
        define("floTARIFA_XOCOS",1.00);
        define("floTARIFA_XICLE",0.50);
        define("floTARIFA_CARAM",1.50);
        define("floTARIFA_IVA",0.10);

        // llogica de dades
        $floTotCost = passarPerCaixa($intXocolat,$intXiclets,$intCaramel);               
        unset($_POST);
        
        // sortida de dades        
        echo 'El ticket costa: ' . number_format(($floTotCost/1.1),2) . '€ +Iva= <span>' . number_format($floTotCost,2) . '</span> euruuss Joaan!!<br><br>';
    }

?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpXocolat">Xocolata: </label>
    <input type="number" id="inpXocolat" name="inpXocolat" value="0" min="0" max="10">
    <br>
    <label for="inpXiclets">Xiclets: </label>
    <input type="number" id="inpXiclets" name="inpXiclets" value="0" min="0" max="10">
    <br>
    <label for="inpCaramel">Caramels: </label>
    <input type="number" id="inpCaramel" name="inpCaramel" value="0" min="0" max="10">
    <br>
    <br>
    <input type="submit" value=" mostrar cost ">
    <br> 
    <br>     
</form>
