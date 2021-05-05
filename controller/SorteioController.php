<?php

namespace Sorteios\Controller;

//include_once(__DIR__ . "/../model/sorteioModel.php");

//namespace Sorteio\controller;
//require_once(__DIR__.'/../config.inc.php');
//include_once(__DIR__ ."/../clase/Sorteio.php");
//require_once(realpath(dirname(__FILE__)).'/../config.inc.php');
//use Sorteio\clase\Sorteio;
//use Sorteio\clase\Sorteio;
use Sorteios\clase\Sorteio as Sort1;

class SorteioController
{
    private int $a;
    public function __construct()
    {
    }

    public function mostrarResultado($nome_lot, $data_sorteio, $num_inicial, $num_fim): string
    {
        //$sorteio = new \Sorteio\clase\Sorteio();
        //$sorteio = new Sorteio();
        $sorteio = new Sort1();
        $sorteio->salvar($nome_lot, $data_sorteio, $num_inicial, $num_fim);
        $sorteio->gerarNumeroSorteio();
        $resultado = $sorteio->getNumeroSorteado();
//print_r($sorteio->getNumeroSorteado());
        $cad_result = implode(',', $resultado);
        $html = "";
        $html .= "<h4>Número sorteado</h4>";
        $html .= $cad_result;
        $html .= "<hr>";
        $html .= "<h4>Número sorteado ordenado</h4>";
        sort($resultado);
        $html .= implode(',', $resultado);
        $html .= "<hr>";
        $html .= "<h4>Acertos por apostador</h4>";
        $html .= $sorteio->getHTMLAcertos();
        return $html;
    }
}
