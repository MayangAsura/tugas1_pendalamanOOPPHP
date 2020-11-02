<?php

abstract class Hewan {

    use Fight;

    public $nama ;
    public $darah = 50 ;
    public $jumlahKaki ;
    public $keahlian ; 

    abstract public function getInfoHewan();

    public function atraksi(){
        echo $this->nama . ' sedang ' .$this->keahlian;
    }

}

?>