<?php

    class Titular { 
        private Cpf $cpf;
        private string $nome;
        private Endereco $endereco;

        public function __construct(Cpf $cpf, string $nome, Endereco $endereco)  
        {
            $this->cpf = $cpf;
            $this->validaNome($nome);
            $this->nome = $nome;

        }

        public function recuperaCpf()
        {
            return $this->cpf->recuperaNumCpf() ;
        }

        public function recuperaNome()
        {
            return $this->nome;
        }

        public function recuperaEndereco()
        {
            return $this->endereco;
        }
        
        private function validaNome($nome)
        {
            if (strlen($nome) < 4){
                echo "O nome precisa ter mais de três letras" . PHP_EOL;
                exit();
            }
        }
        
    }