<!-- 
    ENUNCIAT:

    Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

    Condicions:

    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.
  -->

    <!-- instruccions PhP  -->
<?php

    // valor per defecte =10 però agafarà el valor que li passem, si li passem.
    function evaluar($intNota){                 
        $strMsg = '';      
        switch (true) {
            case ($intNota < 33):
                $strMsg = "L'estudiant reprovarà :'( <br>";
                break;
            case ($intNota < 45):
                $strMsg = "Grau de <span>Tercera</span> Divisió :( <br>";
                break;
            case ($intNota < 60):
                $strMsg = "Grau de <span>Segona</span> Divisió :) <br>";
                break;               
            default:
                $strMsg = "Grau de <span>Primera</span> Divisió!! :D <br>";
        }
        return $strMsg;
    }
    
    // entrada de dades 
    echo '<b>EXERCICI-5</b> <br><br>';
    if ( !empty($_POST['inpNota']) ) {
        $strNota = $_POST['inpNota'];         

        // llogica de dades
        $strComunicat = evaluar(intval($strNota));
    }else{
        // llogica de dades
        $strComunicat = 'No presentat a examen.';
    }
    // sortida de dades
    echo $strComunicat . "<br><br>";
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpNota">Nota de l'alumne (0-100):</label>
    <input type="number" id="inpNota" name="inpNota" min="0" max="100">
    <br>
    <br>
    <input type="submit" value=" Evaluar ">
    <br> 
    <br>   
  
</form>

