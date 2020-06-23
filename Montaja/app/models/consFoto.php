<?php
require_once 'ConexaoMysql.php';
include_once'./app/views/forms/frmConsImagem.php';
$c = new conexaoMysql();
$sql = "SELECT * FROM `fotos` WHERE `pedido`=".$_REQUEST['txtPedido'];
$result = $c->execSql($sql);
//echo'<h3>Resultado da busca</h3><hr>';
if($result->num_rows == 0){
    echo'<table>
        <tr><td colspan="7"><h3>Resultado da busca</h3><hr></td></tr>
        <tr><td><span class="error"><h3><b>Não existe dados cadastardo nesse pedido</b></h3></span></td></tr>
        </table>
    ';
}else{

    echo'<table id="tblResultado">
             <tr><td colspan="7"><h3>Resultado da busca</h3><hr></td></tr>  
        ';
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
          //echo $row['id'].'<br>';
            echo'
                <tr>
                <th>Pedido</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Montador</th>
                <th>Telefone</th>
                <th>Data</th>
                <th>Foto</th>
            </tr>';
            echo'<tr>';
            echo '<td>'.$row['pedido'].'</td>';
            echo '<td>'.$row['endereco'].'</td>';
            echo '<td>'.$row['cidade'].'</td>';
            echo '<td>'.$row['montador'].'</td>';
            echo '<td>'.$row['telefone'].'</td>';
            echo '<td>'.$row['data'].'</td>';
            echo '<td><a href="'.$row['url_foto'].'" target="blanck">Ver foto</a></td>';
            echo'</tr>
                <tr><th colspan="2">Observação</th></tr>
                <tr><td colspan="7">'.$row['observacao'].'</td></tr>
                <tr><td colspan="7"><hr></td></tr>    
                ';        
    }
    echo'</table>';
}    
/*       
	echo $row['observacao'].'<br>';
	echo '<a href="'.$row['url_foto'].'">foto</a><br>';
        echo '<iframe src="'.$row['url_foto'].'"></iframe><br>';
	echo'<hr>';
}
 * 
 */