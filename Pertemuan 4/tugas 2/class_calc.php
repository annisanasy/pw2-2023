<?php
    class Calculator {
        private $bilangansatu;
        private $bilangandua;
        
        public function __construct($bilsatu, $bildua,) {
            $this->bilangansatu = $bilsatu;
            $this->bilangandua = $bildua;
        }

        public function getPertambahan() {
            $tambah = ($this->bilangansatu + $this->bilangandua);
            return $tambah;
           }

        public function getPengurangan() {
            $kurang = ($this->bilangansatu - $this->bilangandua);
            return $kurang;
        }

        public function getPembagian() {
            $bagi = ($this->bilangansatu / $this->bilangandua);
            return $bagi;
        }

        public function getPerkalian() {
            $kali = ($this->bilangansatu * $this->bilangandua);
            return $kali;
        }
        // Method lainnya
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);

    echo "<br>Pertambahan = " . $calculator->getPertambahan();
    echo "<br>Pengurangan = " . $calculator->getPengurangan();
    echo "<br>Pembagian = " . $calculator->getPembagian();
    echo "<br>Perkalian = " . $calculator->getPerkalian();
?>