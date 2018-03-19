<?php
/**
 * Description of Caneta
 *
 * @author Thiago
 */
class Caneta {
    
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if( $this->tampada == true){
            echo "<p>ERRO! Nao posso rabiscar!";
        }else{
            echo '<p>Estou rabiscando</p>';
        }
    }
    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    }
            
}