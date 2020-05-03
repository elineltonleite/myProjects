
<form method="post" class="frm" id="frm" enctype="multipart/form-data">
		<label id="frmCadImgCmp1">
		NºPedido
			<input type="text" name="" id="">
		</label>
		<label id="frmCadImgCmp2">
		Endereço da montagem
			<input type="text" name="" id="">
		</label>
		<label id="frmCadImgCmp3">
		Bairro / Cidade
			<!--<input type="text" name="" id="">-->
			<select name="bairro">
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
					'Samambaia','Santa Maria','Santo Antônio GO','Sobradinho',
					'Recanto das Emas','Riacho Fundo I', 'Riacho Fundo II',
					'Taguatinga',
					'Valparaiso GO',
					'W3 Norte','W3 sul'
					];
					for($i=0; $i<=count($bairros); $i++){
						echo'<option>'.$bairros[$i].'</option>';	
					}
				?>	
			</select>
		</label>
		<label id="frmCadImgCmp4">
		Nome do montador
			<input type="text" name="" id="">
		</label>
		<label id="frmCadImgCmp5">
		Telefone montador
			<input type="text" name="" id="">
		</label>
		<label id="frmCadImgCmp6">
		Data da visita
			<input type="date" name="" id="cmpData">
		</label>
		<label id="frmCadImgCmp7">
		Observação
			<textarea id="" name=""></textarea>
		</label>
		<img src="app/views/imagens/fotos.png" id="imgFile" width="60px">
		<label id="frmCadImgCmp8">
			<input type="file" name="fotos[]" multiple="multiple" id="">
		</label>
	<button id="btnCadImg" class="btn">Enviar</button>
</form>