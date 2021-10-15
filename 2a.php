<?php
include('fatorial.php');

echo nl2br('2) Dadas as funções do exercícios 1 faça o seguinte:
    a) armazene em um vetor os primeiros n fatoriais dado que n é o parâmetro da função fatorial. Exiba no cliente os elementos do vetor.');

    $n = 20;
    echo fatorial_vetor($n);

    function fatorial_vetor($n){
        $i = 0;
        $fatoriais = array();
        while ($n >= 1) {
            $fatoriais[] = fatorial($n);
            echo '<br>Fatorial de ' . $n . '!: ' . $fatoriais[$i];
            $n--;
            $i++;
        }
    }
?>