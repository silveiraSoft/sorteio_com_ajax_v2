<?php

namespace Sorteios\clase;

//include_once("Apostador.php");
//require_once(realpath(dirname(__FILE__)).'/../config.inc.php');

//namespace sorteio_com_ajax\clase;
use Sorteios\clase\Apostador as Apost;

//use Sorteio\clase\Apostador;

class Sorteio
{
    private $nome_loteria;
    private $data_sorteio;
    private $num_inicial;
    private $num_final;
    private array $list_apostadores;
    private $numeroSorteado;
    public function __construct()
    {
        /*
        $this->list_apostadores[] = new Apostador(1, "Adalberto",array(12,13,14,15,16,17));
        $this->list_apostadores[] = new Apostador(2, "Yilian",array(15,12,16,17,18,19));
        $this->list_apostadores[] = new Apostador(3, "victoria",array(15,14,14,18,20,22));
        */
        $this->list_apostadores[] = new Apost(1, "Adalberto", array(12,13,14,15,16,17));
        $this->list_apostadores[] = new Apost(2, "Yilian", array(15,12,16,17,18,19));
        $this->list_apostadores[] = new Apost(3, "victoria", array(15,14,14,18,20,22));
    }

    public function salvar($nome_loteria, $data_sorteio, $num_inicial, $num_final)
    {
        $this->nome_loteria = $nome_loteria;
        $this->data_sorteio = $data_sorteio;
        $this->num_inicial = $num_inicial;
        $this->num_final = $num_final;
    }

    public function gerarNumeroSorteio()
    {


        for ($i = 0; $i <= 5; $i++) {
            $this->numeroSorteado[] = rand($this->num_inicial, $this->num_final);
        }
    }

    public function getNumeroSorteado()
    {
        return $this->numeroSorteado;
    }


    public function mostrarAcertos()
    {
        foreach ($this->list_apostadores as $key => $apostador) {
            echo "<hr>";
            echo "Apostador: " . $apostador->getNome() . "</br>";
            echo "Cartela: " . implode(",", $apostador->getCartela()) . "</br>";
            $arr_intersect = array_intersect($apostador->getCartela(), $this->numeroSorteado);
            if (count($arr_intersect) > 0) {
                echo "Acertos: " . implode(",", $arr_intersect);
            } else {
                echo "Não ouve acertos";
            }
        }
        echo "</hr>";
    }


    public function getHTMLAcertos()
    {
        $html = "";
        foreach ($this->list_apostadores as $key => $apostador) {
            $html .= "<hr>";
            $html .= "Apostador: " . $apostador->getNome() . "</br>";
            $html .= "Cartela: " . implode(",", $apostador->getCartela()) . "</br>";
            $arr_intersect = array_intersect($apostador->getCartela(), $this->numeroSorteado);
            if (count($arr_intersect) > 0) {
                $html .= "Acertos: " . implode(",", $arr_intersect);
            } else {
                $html .= "Não ouve acertos";
            }
        }
        $html .= "</hr>";
        return $html;
    }
}
