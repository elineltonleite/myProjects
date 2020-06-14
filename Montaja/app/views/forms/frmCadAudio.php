
<form action="#" method="POST" class="frm" id="frm" enctype="multipart/form-data">
		<h1 class="titleForm row-1 col-full">Cadastrar Audio</h1>
		<label class="row-2 col-1_2">
		Nº Pedido
			<input type="text" name="txtPedido" id="pedido">
		</label>
		<label class="row-3 col-full">
		Observação
			<textarea id="txtObservacao" name="txtObservacao" onchange="maiusculo('txtObservacao')"></textarea>
		</label>
		<label class="row-4 col-1_4">
			<input type="file" name="audio[]" multiple="multiple" id="">
		</label>
		<label class="row-4 col-1_5">
		<button id="" class="btn">Enviar</button>
		</label>
</form>