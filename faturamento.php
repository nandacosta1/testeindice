<?php
// Carregar o conteúdo do arquivo JSON
$data = file_get_contents('faturamento.json');
$faturamento_diario = json_decode($data, true);

// Filtrar dias com faturamento
$valores_faturamento = array_filter($faturamento_diario, function ($valor) {
    return $valor > 0;
});

$n_dias = count($valores_faturamento);
$media_mensal = array_sum($valores_faturamento) / $n_dias;

// Calcular menor e maior valor
$menor_valor = min($valores_faturamento);
$maior_valor = max($valores_faturamento);

// Calcular número de dias acima da média
$dias_acima_media = count(array_filter($valores_faturamento, function ($valor) use ($media_mensal) {
    return $valor > $media_mensal;
}));

echo "Menor valor de faturamento: R$" . number_format($menor_valor, 2, ',', '.') . "\n";
echo "Maior valor de faturamento: R$" . number_format($maior_valor, 2, ',', '.') . "\n";
echo "Número de dias acima da média: $dias_acima_media\n";
?>
