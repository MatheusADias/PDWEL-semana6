<?php
echo nl2br ('1) usando os códigos das aula anteriores você deve implementar o seguinte:
b) uma função para retorna se um numero é primo ou composto usando do...while
');

$n = 19;
$count = 0;
$i = 1;
do {
    if($n % $i == 0)
        $count++;
    $i++;
} while($i <= $n);

    if($count == 2)
        echo "<br>$n é primo";
    elseif ($n == 1)
        echo "<br>$n não é primo nem composto";
    else
        echo "<br>$n é composto";

?>