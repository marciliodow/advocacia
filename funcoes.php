<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ($_SERVER['DOCUMENT_ROOT'] . "/advocacia/configuracao.php");

function AbrirDB() {

    $conex = Mysqli_connect(DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_BANCO);

    return $conex;
    //Mysql_select_DB("DB_BANCO");
}

function FecharDB() {
    Mysqli_close();
}

function Gravar($sql) {

    $conexao = AbrirDB();
    //echo $sql;die();
    $retorno = mysqli_query($conexao, $sql);

    if ($retorno != FALSE) {
        return TRUE;
    }
    //fecharDB();
    return FALSE;
}

function Apagar($sql) {

    $conexao = AbrirDB();
    $retorno = mysqli_query($conexao, $sql);

    if ($retorno != FALSE) {
        return TRUE;
    }

    fecharDB();
    return FALSE;
}

function Pesquisar($sql) {

    $solicitacao = array();
    $pesquisa = array();


    $conexao = AbrirDB();

    $retorno = mysqli_query($conexao, $sql);

    while ($solicitacao = mysqli_fetch_array($retorno)) {
        $pesquisa[] = $solicitacao;
    }

    //FecharDB();
    return $pesquisa;
}

function PesquisarUmRegistro($sql) {

    $conexao = AbrirDB();
    $solic = array();
    //ECHO $sql;
    $retorno = mysqli_query($conexao, $sql);

    $solic = mysqli_fetch_assoc($retorno);

    //FecharDB();
    return $solic;
}

function Altera($sql) {

    $conexao = AbrirDB();

    $retorno = mysqli_query($conexao, $sql);

//    $solic = mysqli_fetch_assoc($retorno);
//    FecharDB();
    return $solic;
}
