<?php 
//https://www.hackerrank.com/challenges/strong-password/problem?isFullScreen=true

/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
 */

function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong
    $tipofaltante = 0;
    $caracteresFaltantes = 0;
    
    if ($n < 6){
        $caracteresFaltantes = 6 - $n;
    }
    if (!preg_match('/[a-z]/', $password)){
        $tipofaltante += 1;
    }
    if(!preg_match('/[A-Z]/', $password)){
        $tipofaltante += 1;
    }
    if(!preg_match('/[0-9]/', $password)){
       $tipofaltante += 1;
    }
    if(!preg_match('/[!"@#$^&*()-+]/', $password)){
        $tipofaltante += 1;
    }
    
    return max($tipofaltante, $caracteresFaltantes);
}


?>