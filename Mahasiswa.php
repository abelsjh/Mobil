<?php
    class Mahasiswa{
        public $nim;
        public $nama;
        public $jurusan;

        function __construct($nim,$nama,$jurusan){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->jurusan = $jurusan;
        }

        function getNim(){
            echo "<br>Nim : " . $this->nim;
        }

        function getNama(){
            echo "<br>Nama : " . $this->nama;
        }

        function getJurusan(){
            echo "<br>Jurusan : " . $this->jurusan;
        }
    }

    class SistemInformasi extends Mahasiswa{
        function __construct($nim, $nama, $jurusan){
            parent::__construct($nim, $nama, $jurusan); // Initialize parent class properties
        }

        function ListSI(){ //List Mata Kuliah Sistem Informasi
            $matkul = "1. Matematika<br>";
            $matkul .= "2. B. Inggris<br>";
            $matkul .= "3. Algoritma Pemrograman<br>";
            $matkul .= "4. SIM<br>";
            $matkul .= "5. Ppkn<br>";
            return $matkul;
        }

        function MatkulSI(){
            echo "<br>List Matkul " . $this->nama . " yang harus diambil adalah: <br>" . $this->ListSI();
        }
    }

    class TeknikInformatika extends Mahasiswa{
        function __construct($nim, $nama, $jurusan){
            parent::__construct($nim, $nama, $jurusan); // Initialize parent class properties
        }

        function ListTI(){ //List Mata Kuliah Teknik Informatika
            $matkul = "1. Algoritma Pemrograman<br>";
            $matkul .= "2. Algoritma Pemrograman<br>";
            $matkul .= "3. Algoritma Pemrograman<br>";
            $matkul .= "4. Algoritma Pemrograman<br>";
            $matkul .= "5. Algoritma Pemrograman<br>";
            return $matkul;
        }

        function MatkulTI(){
            echo "<br>List Matkul " . $this->nama . " yang harus diambil adalah: <br>" . $this->ListTI();
        }
    }
    
    echo "<b>Pemrograman Web Pertemuan 2<br></b>";
    echo "<hr>";
    $Mhsw1 = new SistemInformasi ("23.230.0039","Jason Abel S", "Sistem Informasi");
    echo $Mhsw1->getNim();
    echo $Mhsw1->getNama();
    echo $Mhsw1->getJurusan();
    echo "<br>";
    echo $Mhsw1->MatkulSI();

    echo "<hr>";
    $Mhsw2 = new TeknikInformatika ("23.230.0038","Andra Fahdi R", "Teknik Informatika");
    echo $Mhsw2->getNim();
    echo $Mhsw2->getNama();
    echo $Mhsw2->getJurusan();
    echo "<br>";
    echo $Mhsw2->MatkulTI();
?>