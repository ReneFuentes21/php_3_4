<?php

//https://leetcode.com/problems/binary-search/
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $inicio = 0;
        $fin = count($nums) - 1;

        while ($inicio <= $fin) {
            $posicion_enmedio = intval(($inicio + $fin) / 2);

            if ($nums[$posicion_enmedio] == $target) {
                return $posicion_enmedio;
            }

            if ($nums[$posicion_enmedio] > $target) {
                $fin = $posicion_enmedio - 1;
            } else {
                $inicio = $posicion_enmedio + 1;
            }
        }

        return -1; // Si no encuentra el valor
    }
}
$solution = new Solution();
$resultado = $solution->search([-1, 0, 3, 5, 9, 12], 12);
echo "Resultado: " . $resultado; 
