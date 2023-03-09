<?php 

class Casal extends Quarto implements HotelInterface {

    public function __construct($dormitorio, $banheiro, $sala, $cozinha) {
        parent::__construct($dormitorio, $banheiro, $sala, $cozinha);
    }
    public function tipo() {
        echo "Quarto de casal<br>";
    }

    public function numero() {
        echo "O numero do quarto é  6 <br>";
    }

    public function andar() {
        echo "O Quarto está no 3° andar <br>";
    }


}

?>