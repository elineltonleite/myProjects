
<html>
    <body>
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo[]" multiple><br>
            <button id="btnEnviar">Enviar</button>
        </form>
    </body>
</html>
<?php
//session_start();
echo'<pre>';
print_r($_FILES['arquivo']);


//include_once '../../Upload.php';
//$up = new Upload('../uploads/', ['mp3'], 'arquivo');
//echo $up->move('Upload_');



