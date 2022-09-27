<!-- 
    ENUNCIAT:

    Declara dues variables X i Y de tipus int, 
    dues variables N i M de tipus double,
    i assigna a cadascuna un valor. 
    A continuació, mostra per pantalla per a X i Y:

    - El valor de cada variable.
    - La suma.
    - La resta.
    - El producte.
    - El mòdul.

    Per N i M realitzaràs el mateix.

    Després, per a totes les variables (X, Y, N, M):

    - El doble de cada variable.
    - La suma de totes les variables.
    - El producte de totes les variables
  -->

<?php

    // declarar i assignar
    $intX = 1;
    $intY = 2;
    $dblN = 0.5;
    $dblM = 2.5;

    // definir funcions

    function imprimir ($valor1, $valor2) {
        echo "El 1r valor és <span>" . $valor1 . "</span> i el 2n és <span>" . $valor2 . '</span> <br>';
    }

    function calcular ($valor1, $operador, $valor2) {
        switch ($operador) 
        {
        case '+':
            echo "Suma = " . strval($valor1 + $valor2) . '<br>';
            break;
        case '-':
            echo "Resta = " . strval($valor1 - $valor2) . '<br>';
            break;
        case '*':
            echo "Multi = " . strval($valor1 * $valor2) . '<br>';
            break;
        case '/':
            if ($valor2 > 0) {
                echo "Divi = " . strval($valor1 / $valor2) . '<br>';
            }else{
                echo "Divi = infiniiiiiit!";
            }            
            break;
        case '%':
            echo "Mòdul = " . strval($valor1 % $valor2) . '<br>';
            break;
        default:
            echo "demana'm una operació aritmètica, no marciana!!";
            break;
        }
    }

    function doblar ($valor1,$valor2,$valor3,$valor4){

        $result  = 'El doble de ' . $valor1 . ' és ' . strval($valor1 * 2) . '<br>'; 
        $result .= 'El doble de ' . $valor2 . ' és ' . strval($valor2 * 2) . '<br>';         
        $result .= 'El doble de ' . $valor3 . ' és ' . strval($valor3 * 2) . '<br>'; 
        $result .= 'El doble de ' . $valor4 . ' és ' . strval($valor4 * 2) . '<br>'; 
        return $result;
    }

    function sumatori ($valor1,$valor2,$valor3,$valor4){
        $result = "El sumatori total: " . strval($valor1 + $valor2 + $valor3 + $valor4) . '<br>';         
        return $result;
    }

    function producte ($valor1,$valor2,$valor3,$valor4){
        $result = "El producte total: " . strval($valor1 * $valor2 * $valor3 * $valor4) . '<br>';        
        return $result;
    }

    // sortida de dades
    echo '<b>EXERCICI-4 </b><br><br>';

    // cridar a funcions per X, Y
    echo imprimir($intX,$intY);
    echo calcular($intX,'+',$intY);
    echo calcular($intX,'-',$intY);
    echo calcular($intX,'*',$intY);
    echo calcular($intX,'/',$intY);
    echo calcular($intX,'%',$intY);

    // cridar a funcions per N, M
    echo imprimir($dblN,$dblM);
    echo calcular($dblN,'+',$dblM);
    echo calcular($dblN,'-',$dblM);
    echo calcular($dblN,'*',$dblM);
    echo calcular($dblN,'/',$dblM);
    echo calcular($dblN,'%',$dblM);
    
    // cridar a funcions per X, Y, N, M
    echo doblar($intX,$intY,$dblN,$dblM);
    echo sumatori($intX,$intY,$dblN,$dblM);
    echo producte($intX,$intY,$dblN,$dblM);
    
?>