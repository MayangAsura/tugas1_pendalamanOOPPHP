<?php

class Elang extends Hewan {

    public function __construct($jumlahKaki, $keahlian, $attackPower, $defencePower){
        $this->nama = 'ELANG';
        $this->jumlahKaki = $jumlahKaki;
        $this->keahlian = $keahlian;
        $this->attackPower = $attackPower;
        $this->defencePower = $defencePower;
    }

    public function getInfoHewan(){
        echo 'DATA ELANG : '.'(nama)'.$this->nama.' - (darah)'.$this->darah.' - (jmlhkaki)'.$this->jumlahKaki.' - (keahlian)'.$this->keahlian.' - (attack)'. $this->attackPower.' - (deffence)'.$this->defencePower ;
    }

    public function atraksi(){
        echo $this->nama . ' sedang '.$this->keahlian;
    }


}