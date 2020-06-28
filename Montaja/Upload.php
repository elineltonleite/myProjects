<!-- formulario usado para teste-->
<!--<html>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo"><br>
            <button name="btnEnviar">Enviar</button>
        </form>
    </body>
</html>-->

<?php

//iniciar sessão no arquivo que chama a classe Upload.php session_start();
//exemplo abaixo
//incluir classe Upload.php se tiver fora desse arquivo
//$up = new Upload('./app/uploads/', ['jpg', 'jpeg', 'png'], 'arquivo');
//$up->move('teste_');

class Upload {

    private $folder, $file, $allowedExtensions;

    public function __construct($destiny, $extensions, $fileName) {
        $this->folder = $destiny;
        $this->allowedExtensions = $extensions;
        echo'<pre>';
        print_r($_FILES['audio']);
        echo'</pre>';
        if (isset($_FILES[$fileName])) {
            $this->file = $_FILES[$fileName];
        } else {
            //Cria sessão e passa mensagem do erro, e retorna para index o erro;
            $_SESSION['msg'] = '
                <span class="error">
                     <p><b>Erro, arquivo não carregado</b></p>           
                </span>
                ';
            header('location: ../../index.php');
            die();
        }
    }

    public function move($addFileName) {
        //recupera a extensão do arquivo
        $fileExt = strtolower(pathinfo($this->file['name'], PATHINFO_EXTENSION));
        //verifica no array se existe a extensão do arquivo
        if (in_array($fileExt, $this->allowedExtensions)) {
            $tmp = $this->file['tmp_name'];
            $newName = $addFileName . '_' . uniqid() . '.' . $fileExt;

            if (move_uploaded_file($tmp, $this->folder . $newName)) {
                // recupera 1ºposição da string retorna a posição se achar , retorna false se não achar
                //verificando para saber se tem subnivel de onde está sendo chamado a class Upload()
                if (strpos($this->folder, '.') !== false) {
                    //remove nivel de pasta e adiciona caminho apartir da raiz
                    return './app/' . str_replace('../', '', $this->folder . $newName);
                } else {
                    return $this->folder . $newName;
                }
            } else {
                //Cria sessão e passa mensagem do erro, e retorna para index o erro;
                $_SESSION['msg'] = '
                <span class="error">
                     <p><b>Erro, não foi possível mover o arquivo</b></p>           
                </span>
                ';
                header('location: ../../index.php');
                //echo $this->folder . $newName.'<br>'.$this->file['error'].'<br>';
            }
        } else {
            //Cria sessão e passa mensagem do erro, e retorna para index o erro;
            $_SESSION['msg'] = '
                <span class="error">
                     <p><b>Erro, arquivo não permitido</b></p>           
                </span>
                ';
            header('location: ../../index.php');
        }
    }
}
