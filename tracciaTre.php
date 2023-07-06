<?php
//!CLASSE CAR
class Car {
    private $num_telaio; 
    protected function impostaNumeroTelaio($targa){
        $this->num_telaio = $targa;
    }
    protected function richiamaValoreTelaio(){
        return $this->num_telaio;
    }
} 
//!CLASSE FIAT
class Fiat extends Car {
    protected $license;
    protected $color;
    public function __construct($telaio, $license, $color){
        $this->license = $license;
        $this->color = $color;
        $this->impostaNumeroTelaio($telaio);
        $this->presentaAuto();
    }
    private function presentaAuto(){
        echo "La mia macchina è $this->license con targa $this->color e numero di Telaio " . $this->richiamaValoreTelaio();
    }
}
//! ISTANZA UNO
$cinquecento = new Fiat('109827746388', "Fiat", "AX992LK");
var_dump($cinquecento);
?>