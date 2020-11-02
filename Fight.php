<?php

trait Fight{

    public $attackPower;
    public $defencePower;

    public function serang($lawan){
        echo $this->nama . ' sedang menyerang '. $lawan;
    }

    public function diserang($hewan, $darah, $attackPowerPenyerang, $defencePowerDiserang){
        echo '<br>'.$hewan . ' sedang diserang';
        
        // “darah sekarang – attackPower penyerang / defencePower yang diserang”
        $this->darah = $darah - $attackPowerPenyerang / $defencePowerDiserang;
        
        // var_dump($this->darah); die();
        
    }
}