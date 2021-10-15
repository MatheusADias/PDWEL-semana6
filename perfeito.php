<?php

function e_perfeito($num) {
    $div = 0;

    for($i=1 ; $i < $num ; $i++)
        if($num % $i == 0)
            $div = $div + $i;

    if($num == $div)
        return True;
    else
        return False;
}
?>