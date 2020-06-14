<?php
echo $_REQUEST['txtPedido'].'<br>';
echo $_REQUEST['txtEndereco'].'<br>';
echo $_REQUEST['cidade'].'<br>';
echo $_REQUEST['txtMontador'].'<br>';
echo $_REQUEST['txtTel'].'<br>';
echo $_REQUEST['txtData'].'<br>';
echo $_REQUEST['txtObservacao'].'<br>';


$name = $_FILES['foto']['name'];
echo'<pre>';
print_r($_FILES);
echo'
<a href="../../index.php?frm=frmCadImagem">Voltar</a>';