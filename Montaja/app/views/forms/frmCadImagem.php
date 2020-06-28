
<form action="./app/models/cadFoto.php" method="POST" class="frm" id="frm" enctype="multipart/form-data">
    <h1 class="titleForm row-1 col-1_5">Cadastrar Foto</h1>
    <label class="row-2 col-1_2">
        Nº Pedido
        <input type="text" name="txtPedido" id="pedido" required onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    </label>
    <label class="row-2 col-2_4">
        Endereço da montagem
        <input type="text" name="txtEndereco" id="txtEndereco" required onchange="maiusculo('txtEndereco')">
    </label>
    <label class="row-2 col-4_5">
        Bairro / Cidade
        <select  name="cidade" id="cidade" required>
            <?php
            $bairros = [
                '', 'ÁGUAS LINDAS GO', 'ASA SUL', 'ASA NORTE',
                'BRAZLÂNDIA', 'BRASÍLIA',
                'CANDOGOLÂNDIA', 'CEILÂNDIA', 'CIDADE OCIDENTAL', 'CIDADE ESTRUTURAL', 'COCALZINHO GO', 'CRUZEIRO',
                'FORMOSA',
                'GAMA', 'GUARÁ',
                'INCRA',
                'LUZIÂNIA',
                'NOVO GAMA', 'NÚCLEO BRANDEIRANTE',
                'PADRE BERNARDO', 'PLANALTINA DF', 'PLANALTINA GO', 'PLANO PILOTO',
                'RECANTO DAS EMAS', 'RIACHO FUNDO I', 'RIACHO FUNDO II',
                'SAMAMBAIA', 'SANTA MARIA', 'SANTO ANTÔNIO GO', 'SOBRADINHO',
                'TAGUATINGA',
                'VALPARAISO GO',
                'W3 NORTE', 'W3 SUL'
            ];
            for ($i = 0; $i < count($bairros); $i++) {
                echo'<option>' . $bairros[$i] . '</option>';
            }
            ?>	
        </select>
    </label>
    <label class="row-3 col-1_3">
        Nome do montador
        <input type="text" name="txtMontador" id="txtMontador" required onchange="maiusculo('txtMontador')">
    </label>
    <label class="row-3">
        Telefone do montador
        <input type="text" name="txtTel" id="" required onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    </label>
    <label class="row-3">
        Data da visita
        <input type="date" name="txtData" id="cmpData" required="">
    </label>
    <label class="row-4 col-1_5">
        Observação
        <textarea id="txtObservacao" required name="txtObservacao" onchange="maiusculo('txtObservacao')"></textarea>
    </label>
    <label class="row-5 col-1_4">
        <input type="file" name="foto" required>
    </label>
    <label class="row-5">
        <button id="btnEnviar" class="btn">Enviar</button>
    </label>
</form>