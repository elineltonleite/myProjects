<form action="?acao=consAudio" class="frm" id="frm" method="POST">
    <h1 class="titleForm row-1 col-1_5">Consultar Audio</h1>
    <label class="row-2 col-1_2">
        Nº Pedido
        <input type="text" name="txtPedido" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
    </label>
    <label class="row-2 col-2_3">
        <button class="btn btnCons">Buscar</button>
    </label>	
</form>