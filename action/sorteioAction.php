<?php

include_once(__DIR__ . "/../config.inc.php");
//echo ID_APP;exit;
use Conection\Conexao,

    Sorteios\Controller\SorteioController;

$nome_lot = (isset($_POST['nome_lot'])) ? $_POST['nome_lot'] : '';
$data_sorteio = (isset($_POST['data_sorteio'])) ? $_POST['data_sorteio'] : '';
$num_inicial = (isset($_POST['num_inicial'])) ? $_POST['num_inicial'] : '';
$num_fim = (isset($_POST['num_fim'])) ? $_POST['num_fim'] : '';
$acao = (isset($_POST['acao'])) ? $_POST['acao'] : '';
include_once(__DIR__ . "/../controller/sorteioController.php");
$sorteioController = new SorteioController();
switch ($acao) {
    case 'sortear':
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        $data = $sorteioController->mostrarResultado($nome_lot, $data_sorteio, $num_inicial, $num_fim);
        echo $data;
    //print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array
        //echo json_encode($data);

        break;
    default:
        /*
        try {
            $conexao = new Conection\Conexao();
            $conn = $conexao->conectar();
            $sql = "Select * from desenvolvedor";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
            unset($conexao);
            unset($conn);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        */

        include_once(__DIR__ . "/../view/sorteioForm.php");

        break;
}
