<!-- 
    ENUNCIAT:
    Crea una classe Employee, defineix com a atributs el seu nom i sou. 
    Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
    Plantejar un segon mètode print que imprimeixi el nom,
    i un missatge si ha de pagar impostos (si sou supera 6000, paga).
-->

<?php
    // l'arxiu controller té els mètodes-funcions específiques per Empleat
    require 'EmployeeController.php';

    // des d'aquest fitxer exercici_1.php, que en realitat seria Routes.php que
    // és on defineix que si com a Servidor rebem https://api/employee/list ell
    // ha de identificar el mètode: $routes->get("list","EmployeeController::listEmployee");

    // Per tan si localment (sense API) invoquem el mètode "EmployeeController::showEmployee":
    // showEmployee('Ignasi',28000);

    echo '<b> EXERCICI-1 Employee (obj 1 class)</b> <br><br>';
    // ara deixarem que l'usuari entri el seu nom i el seu Salari...
    if ( !empty($_POST['inpNom'])  &&  !empty($_POST['inpSou']) ) {

        // entrada de dades
        $strNom = $_POST['inpNom'];    
        $intSou = intval($_POST['inpSou']);

        // llogica de dades
        showEmployee($strNom,$intSou);

        // sortida de dades
        // ...mètode Show procesa i ja mostra a pantalla
    }

?>

    <!-- renderitzat Html  -->    
    <form action="index.php" method="post">
        <label for="inpNom">Entra el teu Nom: </label>
        <input type="text" id="inpNom" name="inpNom" placeholder="nom de pila">    
        <br>
        <label for="inpSou">Entra el teu Sou: </label>
        <input type="number" id="inpSou" name="inpSou">
        <br>
        <br>
        <input type="submit" value=" Toca pagar impostos? ">
        <br> 
        <br>     
    </form>
