
<form action="./app/models/cadAudio.php" method="POST" class="frm" id="frm" enctype="multipart/form-data">
    <h1 class="titleForm row-1 col-1_5">Cadastrar Audio</h1>
    <label class="row-2 col-1_2">
        Nº Pedido
        <input type="text" name="txtPedido" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
    </label>
    <label class="row-3 col-1_5">
        Observação
        <textarea id="txtObservacao" name="txtObservacao" onchange="maiusculo('txtObservacao')" required></textarea>
    </label>
    <label class="row-4 col-1_4">
        <input type="file" name="audio" required>
    </label>
    <label class="row-4 col-4_5">
        <button id="" class="btn">Enviar</button>
    </label>
</form>