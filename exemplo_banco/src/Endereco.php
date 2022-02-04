<?php

class Endereco 
{
    // Atributos
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
    
    // Métodos
    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function recuperaRua()
    {
        return $this->rua;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }
    
}









