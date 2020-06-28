<?php
session_start();
require_once 'ConexaoMysql.php';
require_once '../../Upload.php';

$up = new Upload('../uploads/audios/', ['mp3'], 'audio');
$urlAudio = $up->move($_REQUEST['txtPedido']);

$conexao = new conexaoMysql();
$sql = "INSERT INTO `audios`(`pedido`,`observacao`,`url_audio`)
    VALUES(
    '".$_REQUEST['txtPedido']."',
    '".$_REQUEST['txtObservacao']."',
    '".$urlAudio."'
    )";


if ($conexao->execSql($sql)) {
    $_SESSION['msg'] = '
        <span class="sucess">
            <p><b>Cadastrado com sucesso</b></p>
            <p><b>Nº Pedido:' . $_REQUEST['txtPedido'] . '</b></p>
        </span>
        ';
} else {
    $_SESSION['msg'] = '
        <span class="error">
            <p><b>Erro, tente cadastrar novamente</b></p>
            <p><b>Nº Pedido:' . $_REQUEST['txtPedido'] . '</b></p>
        </span>';
}
header('location: ../../index.php?frm=frmCadAudio');



