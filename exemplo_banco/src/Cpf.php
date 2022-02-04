<?php

    class Cpf{
        private string $numCpf;

        public function __construct( string $numCpf)
        {
            $this->numCpf = $numCpf;
        }

        public function recuperaNumCpf()
        {
            return $this->numCpf;
        }

    }






