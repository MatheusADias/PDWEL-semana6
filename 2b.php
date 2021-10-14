<?php
echo nl2br ('2) Dadas as funções do exercícios 1 faça o seguinte:
b) armazene em um vetor os primeiros n primo dado. Exiba no cliente os elementos do vetor.
');

$n = 11;
$count = 0;
$i = 1;
$vetor = array();
do {
    array_unshift($vetor, $n / $i);
    if($n % $i == 0)
        $count++;
    $i++;

} while($i <= $n);

    if($count == 2){
        echo "<br>$n é primo<br>";
        print_r(array_values($vetor));
    }
    elseif ($n == 1){
        echo "<br>$n não é primo nem composto<br>";
        print_r(array_values($vetor));
    }
    else{
        echo "<br>$n é composto<br>";
        print_r(array_values($vetor));
    }
?>