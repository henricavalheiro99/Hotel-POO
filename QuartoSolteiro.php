<?php 

class Solteiro extends Quarto implements HotelInterface {

    public function __construct($dormitorio, $banheiro, $sala, $cozinha) {
        parent::__construct($dormitorio, $banheiro, $sala, $cozinha);
    }

    public function numero() {
        echo "O numero do quarto é 2 <br>";
    }

    public function andar() {
        echo "O quarto está no 8º andar <br>";
    }


    public function tipo() {
        echo "Quarto de solteiro<br>";
    }
}
?>