<?php
include('primo.php');

echo nl2br ('2) Dadas as funções do exercícios 1 faça o seguinte:
b) armazene em um vetor os primeiros n primo dado. Exiba no cliente os elementos do vetor.
');

$n = 100;

echo '<br>Número dado: ' . $n . '<br>';
echo primo_vetor($n);

function primo_vetor($n){
    $i = 0;
    $primos = array();
    while ($n >= 1) {
        $result = e_primo($n);
        if ($result == 1){
            $primos[] = $result;
            echo "<br>" . number_format($n, 0, ',', '.') . " é primo";
        }
        $n--;
        $i++;
    }
}

?>