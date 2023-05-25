<?php

    file_get_contents('php://input');
    $obj = json_decode($json, true);
    if (!isset ($obj['cpf'])){
        $obj=['status' => 'error'];
        $json = json_encode($obj);
        print $json;
        exit;
    }
    $cpf = $obj['cpf'];
    include 'funcoes.php';
    $teste = valida($cpf);
    if (!$teste) {
        $obj = ['status' => 'nao'];
        $json = json_encode($obj);
        print $json;
        exit;
    }
    $obj = ['status' => 'sim'];
    $json = json_encode($obj);
    print $json;