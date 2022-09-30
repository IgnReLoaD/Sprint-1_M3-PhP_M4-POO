<?php
    // l'arxiu model té la Classe amb Mètodes i Model de dades definit per Empleat
    require './Models/EmployeeModel.php';

    // aquest arxiu Controller tindria mètodes CRUD a taula Empleat, aquí el Read:
    function showEmployee($name,$salary){
        // sap crear l'objecte a partir de fitxer Model (on té la classe definida)
        $objEmpleat = new Employee();
        $objEmpleat->initialize($name,$salary);
        $objEmpleat->print();
        $objEmpleat->pagar();
        return true;
    }

?>
