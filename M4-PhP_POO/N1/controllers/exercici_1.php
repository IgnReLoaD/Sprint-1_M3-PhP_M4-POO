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
    showEmployee('Ignasi',28000);

?>
