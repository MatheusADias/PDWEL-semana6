<?php 
    function fatorial($num){
        $num_fixo = $num;
        $total = 1;
        while ($num > 1) {
            $total *= $num;
            $num--;
        }
        return number_format($total, 0, ',', '.');
    }
?>