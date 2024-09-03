<?php
function isFibonacci($num) {
    $a = 0;
    $b = 1;

    while ($a < $num) {
        $c = $a;
        $a = $b;
        $b = $c + $b;
    }

    return $a === $num;
}

// Número informado
$numero = intval(readline("Digite um número: "));

if (isFibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.";
} else {
    echo "O número $numero não pertence à sequência de Fibonacci.";
}
?>