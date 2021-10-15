<?php
include ('primo.php');

echo nl2br ('1) usando os códigos das aula anteriores você deve implementar o seguinte:
b) uma função para retorna se um numero é primo ou composto usando do...while
');

$n = 19;

if(e_primo($n) == 1)
    echo "<br>" . number_format($n, 0, ',', '.') . " é primo";
elseif (e_primo($n) == 2)
    echo "<br>" . number_format($n, 0, ',', '.') . " não é primo nem composto";
else
    echo "<br>" . number_format($n, 0, ',', '.') . " é composto";
?>