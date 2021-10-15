<?php
include('perfeito.php');

echo nl2br ('2) Dadas as funções do exercícios 1 faça o seguinte:
c) armazene em um vetor os primeiros n perfeitos encontrados. Exiba no cliente os elementos do vetor
');

$n = 10000;

echo '<br>Número dado: ' . $n . '<br>';
echo perfeito_vetor($n);

function perfeito_vetor($n){
    $i = 0;
    $perfeitos = array();
    while ($n >= 1) {
        $result = e_perfeito($n);
        if ($result == True){
            $perfeitos[] = $result;
            echo "<br>" . number_format($n, 0, ',', '.') . " é perfeito";
        }
        $n--;
        $i++;
    }
}
?>