<?php

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($p, $l, $t) {
		        $this->panjang = $p;
                $this->lebar = $l;
                $this->tinggi = $t;
        }
    
        public function getLuas() {
				 $luas = 2*($this->panjang*$this->lebar) + 2*($this->lebar*$this->tinggi) + 2*($this->panjang*$this->tinggi);
                return $luas;
				}
    
        public function getKeliling() {
            $keliling = 4*($this->panjang + $this->lebar + $this->tinggi);
            return $keliling;
        }
    
        public function getVolume() {
            $volume = ($this->panjang * $this->lebar * $this->tinggi);
            return $volume;
        }
    }
?>