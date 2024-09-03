<?php
// Dados de faturamento
$faturamento = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
];

// Calcular total
$total = array_sum($faturamento);

// Calcular percentual
$percentuais = array_map(function ($valor) use ($total) {
    return ($valor / $total) * 100;
}, $faturamento);

// Exibir resultados
foreach ($percentuais as $estado => $percentual) {
    echo "Percentual de $estado: " . number_format($percentual, 2, ',', '.') . "%\n";
}
?>
