<?php

    class Conta {
        private $titular;
        private $saldo;
        private static $numContas = 0;

        // Essa função sempre será executada quando o objeto Conta for criado. Ela está obrigando o programador a passar esses valores por parametro na criação do objeto.
        public function __construct(Titular $titular)
        {
            $this->titular = $titular;
            $this->saldo = 0;
            // Conta::$numContas++;
            self::$numContas++;
        }

        public function saca(float $vlr){
            if($vlr > $this->saldo){
                echo 'Saldo insuficiente.';
            }else{
                $this->saldo -= $vlr;
                echo 'Valor sacado: R$ ' . $vlr . PHP_EOL;
                echo 'Saldo restante: R$ ' . $this->saldo;
            }
        }

        public function deposita(float $vlr){
            if ($vlr <=0.0){
                echo 'Você precisa inserir um valor positivo.' . PHP_EOL;
            }else{
                $this->saldo += $vlr;
                echo 'Seu novo saldo é: R$ ' . $this->saldo . PHP_EOL;
            }
        }

        public function transferir(float $vlr, Conta $contaQueRecebe){
            if ($this->saldo < $vlr){
                echo 'Você não tem saldo para essa tranferencia!' . PHP_EOL;
            }else{
                // $this->saldo -= $vlr;
                // $contaQueRecebe->saldo += $vlr;
                $this->saca($vlr);
                $contaQueRecebe->deposita($vlr);
            }
        }

        public function recuperaSaldo(): float
        {
            return $this->saldo;
        }


        public static function exibeNumContas()
        {
            // return Conta::$numContas;
            return self::$numContas;
        }

    }

















