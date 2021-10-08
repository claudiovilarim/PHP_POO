<?php

    Require_once './src/Conta.php';
    Require_once './src/Titular.php';
    require_once './src/Cpf.php';

    $primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Creuzo'));
    $segundaConta = new Conta(new Titular( new Cpf('987.654.321.00'), 'Sarrad'));
    var_dump($primeiraConta);

    $primeiraConta->deposita(450);

    echo $primeiraConta->recuperaSaldo() . PHP_EOL;
    // echo "Número de contas: " . Conta::$numContas;
    echo "número de contas: " . Conta::exibeNumContas();



