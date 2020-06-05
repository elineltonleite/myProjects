
<form action="./app/models/cadImg.php" method="POST" class="frm" id="frm" enctype="multipart/form-data">
		<label id="frmCadImgCmp1">
		Nº Pedido
			<input type="text" name="txtPedido" id="">
		</label>
		<label id="frmCadImgCmp2">
		Endereço da montagem
			<input type="text" name="txtEndereco" id="">
		</label>
		<label id="frmCadImgCmp3">
		Bairro / Cidade
			<!--<input type="text" name="" id="">-->
			<select  name="cidade">
				<?php
					$bairros=[
					'Águas lindas GO','Asa Sul','Asa Norte',
					'Brazlândia','Brasília',
					'Ceilândia','Cidade Ocidental','Cidade Estrutural','Cocalzinho Go','Cruzeiro',
					'Formosa',
					'Gama','Guará',
					'Incra',
					'Luziânia',
					'Novo Gama','Núcleo Bandeirante',
					'Padre Bernardo','Planaltina DF','Planaltina GO','Plano Piloto',
					'Recanto das Emas','Riacho Fundo I', 'Riacho Fundo II',
					'Samambaia','Santa Maria','Santo Antônio GO','Sobradinho',
					'Taguatinga',
					'Valparaiso GO',
					'W3 Norte','W3 Sul'
					];
					for($i=0; $i<count($bairros); $i++){
						echo'<option>'.$bairros[$i].'</option>';	
					}
				?>	
			</select>
		</label>
		<label id="frmCadImgCmp4">
		Nome do montador
			<input type="text" name="txtMontador" id="">
		</label>
		<label id="frmCadImgCmp5">
		Telefone montador
			<input type="text" name="txtTel" id="">
		</label>
		<label id="frmCadImgCmp6">
		Data da visita
			<input type="date" name="txtData" id="cmpData">
		</label>
		<label id="frmCadImgCmp7">
		Observação
			<textarea id="" name="txtObservacao"></textarea>
		</label>
		<label id="frmCadImgCmp8">
			<input type="file" name="fotos[]" multiple="multiple" id="">
		</label>
	<button id="btnCadImg" class="btn">Enviar</button>
</form>