<?php
//!CLASSE CONTINENT
class Continent {
    public $nameContinent;
    public function __construct($nameContinent){
        $this->nameContinent = $nameContinent;
    }
}
//!CLASSE COUNTRY
class Country extends Continent{
    public $nameCountry;
    public function __construct($nameContinent, $nameCountry){
        parent::__construct($nameContinent);
        $this->nameCountry = $nameCountry;
    }
}
//!CLASSE REGION
class Region extends Country{
    public $nameRegion;
    public function __construct($nameContinent, $nameCountry, $nameRegion){
        parent::__construct($nameContinent, $nameCountry);
        $this->nameRegion = $nameRegion;
    }
}
//!CLASS PROVINCE
class Province extends Region {
    public $nameProvince;
    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince){
        parent::__construct($nameContinent, $nameCountry, $nameRegion);
        $this->nameProvince = $nameProvince;
    }
}
//!CLASS CITY
class City extends Province {
    public $nameCity;
    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity){
        parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince);
        $this->nameCity = $nameCity;
    }
}
//!CLASS STREET
class Street extends City {
    public $nameStreet;
    public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet){
        parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity);
        $this->nameStreet = $nameStreet;
    }
    public function addressInfo() {
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }
}
$myLocation = new Street ("Europa", "Italia", "Puglia", "BA", "Bari", "Strada San Giorgio Martire 2D");
$myLocation->addressInfo();
?>
