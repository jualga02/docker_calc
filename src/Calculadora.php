<?php
    namespace App;

    //==============================================
    $miCalculadora = new Calculadora();
    $resultado = 0;
    $operandos = [];
    $operandos['num1'] = $_GET['num1'];
    $operandos['num2'] = $_GET['num2'];
    $operandos['operacion'] = $_GET['operacion'];

    switch ($operandos['operacion']){
        case 'suma':
            $resultado = $miCalculadora->suma($operandos['num1'], $operandos['num2']);
            break;
        case 'resta':
            $resultado = $miCalculadora->resta($operandos['num1'], $operandos['num2']);
            break;
        case 'multiplicacion':
            $resultado = $miCalculadora->multiplicacion($operandos['num1'], $operandos['num2']); 
            break;
        case 'division':
            $resultado = $miCalculadora->division($operandos['num1'],$operandos['num2']);
            break;
        case 'raiz':
            $resultado = $miCalculadora->raiz($operandos['num1']);
            break;
        default:
            $resultado = 'Operación no válida';
            break;
    }

    echo "El resultado de la operación " . $operandos['operacion']  . " es " . $resultado;

            
    //==============================================

    class Calculadora{


        public function suma($num1, $num2) {
            return $num1 + $num2;
        }

        public function resta($num1, $num2) {
            return $num1 - $num2;
        }

        public function multiplicacion($num1, $num2){
            return $num1 * $num2;
        }

        public function division($num1, $num2){
            return $num1/$num2;
        }

        public function raiz($num1){
            return sqrt($num1);
        }
    }
?>