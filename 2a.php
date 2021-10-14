<?php 
echo nl2br('2) Dadas as funções do exercícios 1 faça o seguinte:
    a) armazene em um vetor os primeiros n fatoriais dado que n é o parâmetro da função fatorial. Exiba no cliente os elementos do vetor.');

    $n = 10;

    echo '<br><br>Elementos do vetor de fatorial de '. $n . ': <br>';
    print_r(fatorial($n));

    function fatorial($n){
        $i = 0;
        $fatoriais = array();
        $total = 1;
        while ($n > 1) {
            $total *= $n;
            $n--;
            array_unshift($fatoriais, $total);
        }
        $i++;
        return array_values($fatoriais);
    }
?>