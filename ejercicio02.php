<?php
if ($_POST) {
    $numeros = array();
    $numeros[] = $_POST ["numero1"];
    $numeros[] = $_POST ["numero2"];
    $numeros[] = $_POST ["numero3"];
    $numeros[] = $_POST ["numero4"];
    $numeros[] = $_POST ["numero5"];
    $numeros[] = $_POST ["numero6"];

    if(count($numeros)!==count(array_unique($numeros))) {
        echo "Error, hay números repitiendose"; // muestra "ERROR" si se ingresan numeros reptidos
    } else{
        $numeros_negativos =array_filter($numeros,function($numero){
            return $numero < 0;
        });

        if (count($numeros_negativos) > 0){
            echo "Error, número/números negativos"; // muestra "ERROR" si se ingresa un o varios numeros negativos
        }else{
            $numero_mas_grande = max($numeros); // numero mas grande 
            $posicion = array_search($numero_mas_grande, $numeros) + 1; // su posicion 
            
            // muestra el resultado 
            echo "El número mas grande es: $numero_mas_grande <br><br> 
            Se encuantra en la posicion: $posicion";
        }
    }
}
?>