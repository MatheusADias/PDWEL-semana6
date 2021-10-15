<?php

function e_primo ($n){
    $count = 0;
    $i = 1;
    do {
        if($n % $i == 0)
            $count++;
        $i++;
    } while($i <= $n);

        if($count == 2)
            return 1;
        elseif ($n == 1)
            return 2;
        else
            return 0;

}
?>