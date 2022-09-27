<!-- 
    ENUNCIAT:

    Escriu un programa en PHP per convertir una cadena en un array (retallant cada caràcter i eliminant les línies buides).

    Entrada
    Hello world

    Sortida
    array(10) { [0]=> string(1) "H" 
                [1]=> string(1) "e" 
                [2]=> string(1) "l" 
                [3]=> string(1) "l" 
                [4]=> string(1) "o" 
                [5]=> string(1) "W" 
                [6]=> string(1) "o" 
                [7]=> string(1) "r" 
                [8]=> string(1) "l" 
                [9]=> string(1) "d"
              }
  -->

    <!-- instruccions PhP  -->
<?php

    function treureEspais($cadena){        
        return str_split(str_replace(' ','',$cadena));        
    }

    // entrada de dades 
    echo '<b>EXERCICI-1</b> <br><br>';
    if ( !empty($_POST['inpCadena']) ) {
        $strCadena = $_POST['inpCadena'];

        // llogica de dades
        $arrCadena = treureEspais($strCadena);
        // $missatge = "<span>" . treureEspais($strCadena) . "</span> <br>";

        // sortida de dades
        // echo $missatge;
        var_dump($arrCadena);
    }
?>

    <!-- renderitzat Html  -->
<form action="index.php" method="post">
    <label for="inpCadena">Frase:</label>
    <input type="text" id="inpCadena" name="inpCadena" placeholder="escriu...">
    <br>
    <br>
    <input type="submit" value="convertir a array">
    <br> 
    <br>   
  
</form>

