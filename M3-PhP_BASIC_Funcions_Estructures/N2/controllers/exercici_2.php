<!-- 
    ENUNCIAT:
    Escriu una funció que determini la quantitat total a pagar per una trucada telefònica 
    segons les següents premisses:
    - Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
    - Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
  -->

    <!-- instruccions PhP  -->
<?php
    echo '<b> EXERCICI-2 </b> <br><br>';

    // funcions amb valors Float (decimals)
    function trucada($intTemps, $floTarifaBase, $floTarifaPaso) {
        $floEuros = $floTarifaBase;
        // switch ($intTemps)
        //  case (3): ($floEuros+=($intTemps-3)+$floTarifaPaso) : '';
        // ($intTemps >3) ? ($floEuros+=($intTemps-3)*$floTarifaPaso) : $floEuros=99;

        switch (true) {
            // case ($intTemps=3): 
            //     $floEuros  = $floTarifaBase + $floTarifaPaso; 
            //     break; 
            case ($intTemps>=3): 
                $floEuros  += $floTarifaPaso + ((($intTemps-3) * $floTarifaPaso)); 
                break;    
            default :
                $floEuros = $floTarifaBase;   
                break;                
        }

        // if ($intTemps >=3) 
        // ($intTemps >=3) ? ($floEuros+=($intTemps-3)*$floTarifaPaso) : ($floEuros = $floTarifaBase);
        return $floEuros;
    }

    if ( !empty($_POST['inpTemps']) ) {

        // entrada de dades
        $intTemps = intval($_POST['inpTemps']);    
        $floTarifaBase = 0.10;
        $floTarifaPaso = 0.05;
        $floTotalCoste = 0;

        // llogica de dades
        switch (true) {
            case ($intTemps<3): $floTotalCoste=$floTarifaBase; break;
            default: $floTotalCoste = trucada($intTemps,$floTarifaBase,$floTarifaPaso);break;
        }
        unset($_POST);
        
        // sortida de dades        
        echo 'La trucada costa: ' . number_format($floTotalCoste,2) . '€ !! <br><br>';
    }

?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpTemps">COST TRUCADA:<br><br>Quant costa la teva trucada?<br> &nbsp; ... entra els minuts (1-15):</label>
    <input type="number" id="inpTemps" name="inpTemps" value="0" min="0" max="15">
    <br>
    <br>
    <input type="submit" value=" mostrar cost ">
    <br> 
    <br>     
</form>
