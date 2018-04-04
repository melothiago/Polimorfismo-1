<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function alimentar() {
        echo "<p>Comendo substancias</p>";
    }

    public function emitirSom() {
        echo "Peixe nao faz som";
    }

    public function locomover() {
        echo "Nadando";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    function soltarBolha(){
        echo "<p>Soltou uma bolha</p>";
    }
}
