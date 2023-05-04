<?php

/**
 * Script1 para la Tarea 05 - DAW. 
 * Incluye cuatro funciones matemáticas (sumar, restar, multiplicar y dividir).
 *
 * @author Profesorado
 * @author José Alfredo Bautista Sebastiao
 * @version 2.0
 * 
 * */
 
 /**
  * Función sumar. Realiza la suma de dos números enteros.
  * @version 2.0
  * @param int $num1 Primer sumando
  * @param int $num2 Segundo sumando
  * @return int Suma
  */
function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
  * Función restar. Realiza la resta de dos números enteros.
  * @version 2.0
  * @param int $num1 Minuendo
  * @param int $num2 Sustraendo
  * @return int Resta
  */
function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
  * Función multiplicar. Realiza la multiplicación de dos números enteros.
  * @version 2.0
  * @param int $num1 Primer factor
  * @param int $num2 Segundo factor
  * @return int Producto
  */
function multiplicar($num1, $num2) {
  return $num1 * $num2;
}

/**
  * Función dividir. Realiza la división de dos números enteros.
  * @version 2.0
  * @param int $num1 Dividendo
  * @param int $num2 Divisor
  * @return float División  
  * @throws Excepción si el divisor es 0.
  */
function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}

?>
