<?php
    class Mobil{
        public $nama;
        public $merk;

        function __construct($nama,$merk){
            $this->nama = $nama;
            $this->merk = $merk;
        }
    }

    class MobilSport extends Mobil{
        private $speed;

        function __construct($nama, $merk, $speed){
            parent::__construct($nama, $merk); // Initialize parent class properties
            $this->speed = $speed;
        }

        function Speed(){
            echo "Speed dari " . $this->nama . " adalah: " . $this->speed . "<br>";
        }
    }

    class MobilCity extends Mobil{
        private $model;

        function __construct($nama, $merk, $model){
            parent::__construct($nama, $merk); // Initialize parent class properties
            $this->model = $model;
        }

        function Model(){
            echo "Model dari " . $this->nama . " adalah:" . $this->model . "<br>";
        }
    }
    
    $MobilSport = new MobilSport ("Lamborghini", "Aventador", "Turbo");
    echo "Nama Mobil: " . $MobilSport->nama . "<br>";
    echo "Merk Mobil: " . $MobilSport->merk . "<br>";
    $MobilSport->Speed();
    echo "<br>";
    $MobilCity = new MobilCity("Honda", "Civic", "Irit");
    echo "Nama Mobil: " . $MobilCity->nama . "<br>";
    echo "Merk Mobil: " . $MobilCity->merk . "<br>";
    $MobilCity->Model();
    echo "<br>";
?>