<?php 

class Quarto {
    private $nome;
    private $raca;
    private $idade;
    private $cor;

    public function __construct($dormitorio, $banheiro, $sala, $cozinha) {
        $this->dormitorio = $dormitorio;
        $this->banheiro = $banheiro;
        $this->sala = $sala;
        $this->cozinha = $cozinha;
    }

    public function getDorm() {
        return $this->dormitorio;
    }

    public function getBanh() {
        return $this->banheiro;
    }

    public function getSala() {
        return $this->sala;
    }

    public function getCoz() {
        return $this->cozinha;
    }

    public function numero() {
        echo "Nº 3";
    }

    public function andar() {
        echo "Primeiro andar";
    }
}

?>