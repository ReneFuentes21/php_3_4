<?php

//https://www.hackerrank.com/challenges/birthday-cake-candles/problem

function birthdayCakeCandles($candles) {
    // Write your code here
    $candleMax = max($candles);
    $count = 0;
    
    foreach ($candles as $candle){
        if ($candle == $candleMax){
            $count += 1;
        }
    }
    
    return $count;
}

?>