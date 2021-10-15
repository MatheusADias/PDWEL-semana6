<?php

include('perfeito.php');

echo nl2br ('1) usando os códigos das aula anteriores você deve implementar o seguinte:
c) uma função para retornar se um numero é perfeito. Observação um número natural é perfeito se e somente se a soma de seus divisores é o próprio número.

');

$n = 8128;

if (e_perfeito($n) == True)
    echo number_format($n, 0, ',', '.') . ' é perfeito';
else 
    echo number_format($n, 0, ',', '.') . ' não é perfeito';

?>