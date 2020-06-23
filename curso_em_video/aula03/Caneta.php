<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tamapada;
    
    public function rabiscar(){
        if($this->tamapada){
            echo'Erro, não posso rabiscar!!';
        }else{
            echo'<p>Estou rabiscndo....</p>';
        }   
    }
    public function tampar(){
        $this->tampada = true; 
    }
    public function destampar(){
        $this->tamapada = false;
    }
}
