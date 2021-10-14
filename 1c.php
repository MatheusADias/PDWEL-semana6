<?php
echo nl2br ('1) usando os códigos das aula anteriores você deve implementar o seguinte:
c) uma função para retornar se um numero é perfeito. Observação um número natural é perfeito se e somente se a soma de seus divisores é o próprio número.

');
 
$num = 8128;
$div = 0;

for($i=1 ; $i < $num ; $i++)
    if($num % $i == 0)
        $div = $div + $i;

if($num == $div)
    echo "$num é perfeito";
else
    echo "$num não é perfeito";
?>