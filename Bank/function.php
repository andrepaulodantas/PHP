<?php

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array 
{
    if ($valor < $conta['saldo']) {
        $conta['saldo'] -= $valor;
        exibeMensagem("Saque realizado com sucesso!");
    } else {
        exibeMensagem("Saldo insuficiente!");
    }
    return $conta;
}

function depositar(array $conta, float $valor): array 
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
        exibeMensagem("Depósito realizado com sucesso!");
    } else {
        exibeMensagem("Valor inválido!");
    } 
    return $conta;
}

function apagar(array $contasCorrentes, string $cpf): array 
{
    if (array_key_exists($cpf, $contasCorrentes)) {
        unset($contasCorrentes[$cpf]);
        exibeMensagem("Conta apagada com sucesso!");
    } else {
        exibeMensagem("Conta não encontrada!");
    }
    return $contasCorrentes;
}

function adicionar(array $contasCorrentes, string $cpf, string $titular, float $saldo, float $limite): array 
{
    if (array_key_exists($cpf, $contasCorrentes)) {
        exibeMensagem("Conta já existe!");
    } else {
        $contasCorrentes[$cpf] = [
            'titular' => $titular,
            'saldo' => $saldo,
            'limite' => $limite
        ];
        exibeMensagem("Conta adicionada com sucesso!");
    }
    return $contasCorrentes;
}

function atualizarLimite(array $contasCorrentes, string $cpf, float $limite): array 
{
    if (array_key_exists($cpf, $contasCorrentes)) {
        $contasCorrentes[$cpf]['limite'] = $limite;
        exibeMensagem("Limite atualizado com sucesso!");
    } else {
        exibeMensagem("Conta não encontrada!");
    }
    return $contasCorrentes;
}

function atualizarSaldo(array $contasCorrentes, string $cpf, float $valor): array 
{
    if (array_key_exists($cpf, $contasCorrentes)) {
        $contasCorrentes[$cpf]['saldo'] = $valor;
        exibeMensagem("Saldo atualizado com sucesso!");
    } else {
        exibeMensagem("Conta não encontrada!");
    }
    return $contasCorrentes;
}

function atualizarTitular(array $contasCorrentes, string $cpf, string $titular): array 
{
    if (array_key_exists($cpf, $contasCorrentes)) {
        $contasCorrentes[$cpf]['titular'] = $titular;
        exibeMensagem("Titular atualizado com sucesso!");
    } else {
        exibeMensagem("Conta não encontrada!");
    }
    return $contasCorrentes;
}