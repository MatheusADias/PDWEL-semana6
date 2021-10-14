<?php 
echo nl2br('1) usando os códigos das aula anteriores você deve implementar o seguinte:
    a) uma função para calcular o fatorial usando while
    <br>R = ');

    $num = 6;
    $num_fixo = $num;
    $total = 1;
    while ($num > 1) {
        $total *= $num;
        $num--;
    }
    echo '<br>Fatorial de ' . $num_fixo . ":<br>";
    echo $total;
?>