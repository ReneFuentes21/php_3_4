<?php
//https://leetcode.com/problems/happy-number/

class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n, &$vistos = []) {
        if ($n == 1) {
            return true;
        }

        if (in_array($n, $vistos)) {
            return false; 
        }

        $vistos[] = $n; 
        $array = str_split($n);
        $totalSum = 0;

        for ($i = 0; $i < count($array); $i++) {
            $totalSum += (intval($array[$i])) ** 2;
        }

        return $this->isHappy($totalSum, $vistos);
    }
}

$solution = new Solution();
$n = 0;
$resultado = $solution->isHappy($n);
echo "¿El $n es un número feliz? " . ($resultado ? 'true' : 'false');
