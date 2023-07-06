<?php
//!CLASS SCHELETRO
class Skeleton {
    protected $skeleType;
    public function __construct($skele){
        $this->skeleType = $skele;
    }
}
//!CLASS BLOODS
class Blood extends Skeleton{
    protected $bloodType;
    public function __construct($skele, $bloodType){
        parent::__construct($skele);
        $this->bloodType = $bloodType;
    }
}
//!CLASSE MAMMIFERI
class Mammals extends Blood {
    protected $mammalsType;
    public function __construct($skele, $bloodType, $mammalsType){
        parent::__construct($skele, $bloodType);
        $this->mammalsType = $mammalsType;
        $this->animalInfo();
    }
    protected function animalInfo(){
        echo "$this->skeleType $this->bloodType $this->mammalsType";
    }
}
//!CLASSE VOLATILI
class Bird extends Blood {
    protected $birdType;
    public function __construct($skele, $bloodType, $birdType){
        parent::__construct($skele, $bloodType);
        $this->birdType = $birdType;
        $this->animalInfo();
    }
    protected function animalInfo(){
        echo "Sono un animale $this->skeleType \nSono un animale a $this->bloodType \nSono un $this->birdType \n";
    }
}
//!CLASSE PESCI
class Fish extends Blood {
    protected $fishType;
    public function __construct($skele, $bloodType, $fishType){
        parent::__construct($skele, $bloodType);
        $this->fishType = $fishType;
        $this->animalInfo();
    }
    protected function animalInfo(){
        echo "Sono un animale $this->skeleType \nSono un animale a $this->bloodType \nSono un $this->fishType \n";
    }
}
//!CLASSE RETTILI
class Reptile extends Blood {
    protected $reptileType;
    public function __construct($skele, $bloodType, $reptileType){
        parent::__construct($skele, $bloodType);
        $this->reptileType = $reptileType;
        $this->animalInfo();
    }
    protected function animalInfo(){
        echo "Sono un animale $this->skeleType \nSono un animale a $this->bloodType \nSono un $this->reptileType \n";
    }
}
//!CLASSE ANFIBI
class Amphibian extends Blood {
    protected $amphibianType;
    public function __construct($skele, $bloodType, $amphibianType){
        parent::__construct($skele, $bloodType);
        $this->amphibianType = $amphibianType;
        $this->animalInfo();
    }
    protected function animalInfo(){
        echo "Sono un animale $this->skeleType \nSono un animale a $this->bloodType \nSono un $this->amphibianType \n";
    }
}

//!CREAZIONE DELLE ISTANZE
$lion = new Mammals("Vertebrato", "Sangue caldo", "leone");
$bird = new Bird("Vertebrato", "Sangue caldo", "volatile");
$karp = new Fish("Vertebrato", "Sangue freddo", "pesce");
$snake = new Reptile("Vertebrato", "Sangue freddo", "rettile");
$frog = new Amphibian("Vertebrato", "Sangue freddo", "anfibio");
?>