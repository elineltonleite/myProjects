<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tamapada;
    
    function rabiscar(){
        if($this->tamapada){
            echo'Erro, não posso rabiscar!!';
        }else{
            echo'<p>Estou rabiscndo....</p>';
        }   
    }
    function tampar(){
        $this->tampada = true; 
    }
    function destampar(){
        $this->tamapada = false;
    }
}
