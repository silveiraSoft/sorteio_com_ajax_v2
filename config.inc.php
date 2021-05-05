<?php

define("ID_APP", 1);

function pasta_raiz($pasta = null)
{
    return $_SERVER['DOCUMENT_ROOT'] . "/" . $pasta;
}

function pasta_atual($pasta = null)
{
    return __DIR__ . "/" . $pasta;
}

require_once pasta_raiz("/sorteio_com_ajax/lib/autoload.php");
