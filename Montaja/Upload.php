<?php
class Upload{
    private $folder,$file,$extAllowed,$extFile,$newName,$pedido;
    
    public function __construct($pasta, $ext, $ped) {
        //$s = DIRECTORY_SEPARATOR;
        $this->folder = $pasta;
        $this->file = isset($_FILES['arquivo'])?$_FILES['arquivo']:'';
        $this->extAllowed = $ext;
        $this->pedido = $ped;
    }
    public function move(){
        $this->extFile = strtolower(pathinfo($this->file['name'], PATHINFO_EXTENSION));
        if(in_array($this->extFile, $this->extAllowed)){
            $tmp = $this->file['tmp_name'];
            $this->newName = $this->pedido.'_'.uniqid().'.'.$this->extFile;
            
            if(move_uploaded_file($tmp, $this->folder.$this->newName)){
               return $this->folder.$this->newName;
            }else{
                echo'Erro, não foi possível fazer upload da foto'; 
            }
        }else{
            echo'Arquivo não permitido,';
        }
    }   
}

?>

<!--
<html>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo"><br>
            <button name="btnEnviar">Enviar</button>
        </form>
    </body>
</html>-->