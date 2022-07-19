<?php


include_once './Bank/function.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'João',
        'saldo' => 1000,
        'limite' => 500
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 200,
        'limite' => 1000
    ],
    '123.456.789-12' => [
        'titular' => 'Pedro',
        'saldo' => 300,
        'limite' => 1500
    ]
];

//$contasCorrentes = apagar($contasCorrentes, '123.456.789-11');
$contasCorrentes = adicionar($contasCorrentes, '123.456.789-13', 'João', 0, 0);
$contasCorrentes = atualizarLimite($contasCorrentes, '123.456.789-10', 1000);
$contasCorrentes = atualizarTitular($contasCorrentes, '123.456.789-10', 'André Araújo');
$contasCorrentes = atualizarSaldo($contasCorrentes, '123.456.789-10', 975000);
$contasCorrentes = atualizarSaldo($contasCorrentes, '123.456.789-12', 1500);

exibeMensagem( PHP_EOL );

exibeMensagem('Total de contas correntes: ' . count($contasCorrentes));

exibeMensagem('Total de contas com saldo maior que 1000: ' . count(array_filter($contasCorrentes, function($contasCorrentes) {
    return $contasCorrentes['saldo'] > 1000;
})));

exibeMensagem('Total de contas com saldo maior que 1000 e menor que 2000: ' . count(array_filter($contasCorrentes, function($contasCorrentes) {
    return $contasCorrentes['saldo'] > 500 && $contasCorrentes['saldo'] < 2000;
})));

exibeMensagem('Total de contas com saldo menor que 500: ' . count(array_filter($contasCorrentes, function($contasCorrentes) {
    return $contasCorrentes['saldo'] < 500;
})));


exibeMensagem( PHP_EOL );

exibeMensagem('Todas as contas:');   

exibeMensagem( PHP_EOL );

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 50);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 250);


foreach ($contasCorrentes as $cpf => $conta) {//$cpf é o índice do array $contasCorrentes
    exibeMensagem( 'Titular: ' . $conta['titular'] );
    exibeMensagem( 'Saldo: ' . $conta['saldo'] );
    exibeMensagem( 'Limite: ' . $conta['limite'] );
    exibeMensagem( 'CPF: ' . $cpf );
}

