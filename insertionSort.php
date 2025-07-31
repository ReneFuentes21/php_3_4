<?php
function insertionSort1($n, $arr) {
  $value = $arr[$n - 1];
  for ($i = $n - 2; $i >= 0; $i--) {
    // Si el valor actual es mayor que el valor a insertar, lo desplazamos
    if ($arr[$i] > $value) {
      $arr[$i + 1] = $arr[$i];
      echo implode(" ", $arr) . "\n";
    } else {
      // Encontramos el lugar correcto
      $arr[$i + 1] = $value;
      echo implode(" ", $arr) . "\n";
      return;
    }
  }
  // Si llegamos al inicio, insertar al principio
  $arr[0] = $value;
  echo implode(" ", $arr) . "\n";
}
// Ejemplo de uso:
$n = 5;
$arr = [2, 4, 6, 8, 3];
insertionSort1($n, $arr);
/* Salida esperada:
2 4 6 8 8
2 4 6 6 8
2 4 4 6 8
2 3 4 6 8
*/