<?php
echo nl2br ('2) Dadas as funções do exercícios 1 faça o seguinte:
c) armazene em um vetor os primeiros n perfeitos encontrados. Exiba no cliente os elementos do vetor');

$num = 10;
$div = 0;
$vetor = array();

for($i=1 ; $i < $num ; $i++)
    if($num % $i == 0){
        array_unshift($vetor, $i);
        $div = $div + $i;
    }

if($num == $div){
    echo "<br><br>$num é perfeito<br>";
    print_r(array_values($vetor));
}
else{
    echo "<br><br>$num não é perfeito<br>";
    print_r(array_values($vetor));
}
?>