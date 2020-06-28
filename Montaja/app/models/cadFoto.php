<?php

session_start();

require_once '../../Upload.php';
$up = new Upload('../uploads/fotos/', ['jpg', 'png', 'jpeg'], 'foto');
$urlFoto = $up->move($_REQUEST['txtPedido']); //recupera o caminho do upload e passa parametro nome do arquivo

require_once'conexaoMysql.php';
$conexao = new conexaoMysql();
$sql = "INSERT INTO `fotos`(`pedido`, `endereco`, `cidade`, `montador`, `telefone`, `data`, `observacao`, `url_foto`)
        VALUES(
        '" . $_REQUEST['txtPedido'] . "',
        '" . $_REQUEST['txtEndereco'] . "',
        '" . $_REQUEST['cidade'] . "',
        '" . $_REQUEST['txtMontador'] . "',
        '" . $_REQUEST['txtTel'] . "',
        '" . $_REQUEST['txtData'] . "',
        '" . $_REQUEST['txtObservacao'] . "',
        '" . $urlFoto . "'
        )";

if ($conexao->execSql($sql)) {
    $_SESSION['msg'] = '
        <span class="sucess">
            p><b>Cadastrado com sucesso</b></p>
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
header('location: ../../index.php?frm=frmCadImagem');


