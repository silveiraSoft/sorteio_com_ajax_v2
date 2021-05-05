<?php

//namespace Sorteio\clase;
namespace Sorteios\clase;

class Apostador
{


    private int $apostadorId;
    private string $nome;
    private $cartela;
    public function __construct($apostadorId, $nome, $cartela)
    {
        $this->apostadorId = $apostadorId;
        $this->nome = $nome;
        $this->cartela = $cartela;
    }

    public function getCartela()
    {
        return $this->cartela;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getApostadorId()
    {
        return $this->apostadorId;
    }
}
