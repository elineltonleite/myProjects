<?php
require_once 'ConexaoMysql.php';
include_once'./app/views/forms/frmConsAudio.php';
$c = new conexaoMysql();
$sql = "SELECT * FROM `audios` WHERE `pedido`=".$_REQUEST['txtPedido'];
$result = $c->execSql($sql);

if($result->num_rows == 0){
    echo'<table>
            <tr><td colspan="7"><h3>Resultado da busca</h3><hr></td></tr>
            <tr><td><h3 class="error"><b>Não existe dados cadastardo nesse pedido</b></h3></td></tr>
        </table>
    ';
}else{

    echo'<table>
             <tr><td colspan="7"><h3>Resultado da busca</h3><hr></td></tr>  
        ';
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
          //echo $row['id'].'<br>';
            echo'
                <tr>
                    <th>Pedido</th>            
                    <th>Audio</th>
                    <th>Download</th>
                </tr>';
            echo'<tr>';
            echo '<td>'.$row['pedido'].'</td>';
            echo '<td>
                    <audio controls>
                        <source src="'.$row['url_audio'].'">
                    </audio>   
                </td>';
            echo '<td><a href="'.$row['url_audio'].'" download>Baixar audio</a></td>';
            echo'</tr>
                <tr><th colspan="2">Observação</th></tr>
                <tr><td colspan="7">'.$row['observacao'].'</td></tr>
                <tr><td colspan="7"><hr></td></tr>    
                ';        
    }
    echo'</table>';
}    
