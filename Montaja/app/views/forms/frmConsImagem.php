<form action="?acao=consFoto"class="frm" id="frm" method="POST">
    <h1 class="titleForm row-1 col-1_5">Consultar Foto</h1>
	<label class="row-2 col-1_2">
            Nº Pedido
		<input type="text" name="txtPedido" required onkeypress="return event.charCode >= 48 && event.charCode <= 57">
	</label>
	<label class="row-2 col-2_3">
            <button class="btn btnCons" onclick="loadDoc('./app/models/','consFoto');">Buscar</button>
	</label>	
</form>