<?php

    // NOTA: aquesta classe cal declarar com "abstracta" pq a dins té un mètode "abstracte" calcularArea()
    //       i calcularArea() és abstracte pq no té 'body', pq només la declarem però no definim, així 
    //       obliguem a que la classe filla la defineixi segons la seva naturalesa/forma.

    abstract class Shape {
        // zona atributs
        private int $_amp;
        private int $_alt;
        private int $_area;

        // 1a-zona: mètode Constructor "initialize"
        public function initialize($amp,$alt){
            // atributs = estat
            $this->_amp = $amp;
            $this->_alt = $alt;
        }

        // 2a-zona: mètodes input-output (setters-getters)
        public function getLlegirArea(){
            return $this->_area;
        }        
        public function setGrabarArea($area){
            $this->_area = $area;
        } 

        // 3a-zona: mètodes ToString "print"
        //          ... en Classe Mare no tenim, tindrem a sub-classe

        // 4a-zona: mètodes Específics - aquest el declarem però no definim, 
        //                             ... així obliguem que sub-classe el defineixi
        abstract public function calcularArea();        

    }

    class Rectangle extends Shape {
        // zona atributs
        //    ... hereta tots els mateixos de Shape (és a dir $_amp, $_alt, $_area)

        // 1a-zona: mètode Constructor "initialize" 
        //    ... hereta el mateix de Shape (tot idèntic)

        // 2a-zona: mètodes input-output
        //    ... hereta tots els setters-getters de Shape

        // 3a-zona: mètodes ToString
        //    ... hereta el mateix de Shape (no en tenim en aquest exemple)

        // 4a-zona: mètodes Específics
        //    ... Atenció!! hereta de Shape però només estava declarat, 
        //        per tan aquí cal definir-lo:
        public function calcularArea() {
            setGrabarArea($this->_amp * $this->_alt);
            return getLlegirArea();            
        }
    }

    class Triangle extends Shape {
        // idem abans: atributs, Constructor, setters-getters, toString, Específics....
        //    ... hereta tots els mateixos de Shape, 
        //        només però important: ens CAL DEFINIR el mètode específic:

        public function calcularArea() {
            setGrabarArea($this->_amp * $this->_alt / 2);
            return getLlegirArea();            
        }
    }

?>
