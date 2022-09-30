<?php
    // l'arxiu model té la Classe amb Mètodes i Model de dades definit per Shape
    require './Models/ShapeModel.php';

    // aquest arxiu Controller tindria mètodes CRUD o Actions a fer sobre Shape:
    function drawShape($strType,$intWide,$intHigh){

        switch ($strType) {
            case "Rectangle":                                 
                define("objFIGURA", new Rectangle());
                // $objFigura = new Rectangle();                
                break;
            case "Triangle":
                define("objFIGURA", new Triangle());
                break;
            default:
                return false;
        }
        $objFIGURA->initialize($intWide,$intHigh);
        $objFIGURA->calcularArea();        
        return true;
    }

?>
