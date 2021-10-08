<?php

    class Titular { 
        private Cpf $cpf;
        private string $nome;

        public function __construct(Cpf $cpf, string $nome)  
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
        
        private function validaNome($nome)
        {
            if (strlen($nome) < 4){
                echo "O nome precisa ter mais de três letras" . PHP_EOL;
                exit();
            }
        }
        
    }