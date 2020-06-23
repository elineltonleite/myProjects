<?php
session_start();

require_once '../../Upload.php';
$up = new Upload('../uploads/fotos/', ['jpg', 'png', 'jpeg'],$_REQUEST['txtPedido']);
$url = $up->move();//recupera o caminho do upload
//adiciona o caminho direto da raiz do projeto
echo $urlFoto ='./app'. str_replace('..','',$url);


//require_once'../../autoload.php';
require_once'conexaoMysql.php';
$c = new conexaoMysql();
$sql ="INSERT INTO `fotos`(`pedido`, `endereco`, `cidade`, `montador`, `telefone`, `data`, `observacao`, `url_foto`)
        VALUES(
        '".$_REQUEST['txtPedido']."',
        '".$_REQUEST['txtEndereco']."',
        '".$_REQUEST['cidade']."',
        '".$_REQUEST['txtMontador']."',
        '".$_REQUEST['txtTel']."',
        '".$_REQUEST['txtData']."',
        '".$_REQUEST['txtObservacao']."',
        '".$urlFoto."'
        )";

if($c->execSql($sql)){
    $_SESSION['msg'] = '
        <span class="sucess" id="msgTopo">
            <b>Cadastrado com sucesso</b>
            <p>Nº Pedido:'.$_REQUEST['txtPedido'].'</p>
        </span>
        ';
}else{
    $_SESSION['msg'] = '
        <span class="error" id="msgTopo">
            <b>Erro, tente cadastrar novamente</b>
            <p>Nº Pedido:'.$_REQUEST['txtPedido'].'</p>
        </span>';
}
header('location: ../../index.php?frm=frmCadImagem');
 

 