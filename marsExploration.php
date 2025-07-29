<?php
function marsExploration($s) {
    $contador = 0;
    $array = str_split($s);
    for($i=0; $i < count($array); $i++){
        if($array[$i]!="S" && $array[$i] != "O"){
            $contador +=1;
        };
    };
    return $contador;
}
marsExploration("");
?>