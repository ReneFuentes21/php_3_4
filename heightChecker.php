<?php
function heightChecker($heights) {
  $expected = $heights;
  sort($expected);
  $count = 0;
  for ($i = 0; $i < count($heights); $i++) {
    if ($heights[$i] != $expected[$i]) {
      $count++;
    }
  }
  return $count;
}
// Ejemplo de uso:
$heights1 = [1, 1, 4, 2, 1, 3];
echo heightChecker($heights1) . "\n"; // Salida: 3
$heights2 = [5, 1, 2, 3, 4];
echo heightChecker($heights2) . "\n"; // Salida: 5
$heights3 = [1, 2, 3, 4, 5];
echo heightChecker($heights3) . "\n"; // Salida: 0