<?php

    spl_autoload_register(function($class_name){
        include $class_name. '.php';
    });

    $elang = new Elang(2, 'terbang tinggi', 10, 5);
    $harimau = new Harimau(4, 'lari cepat', 7, 8);

    $elang->getInfoHewan();
    echo '<br>';
    $harimau->getInfoHewan();

    echo '<br> ################################# <br>';
    
    $elang->atraksi();
    echo '<br>';
    $harimau->atraksi();

    echo '<br> ################################# <br><br>';
    // 1. ELANG menyerang HARIMAU
    $elang->serang('HARIMAU'); 
    $harimau->diserang('HARIMAU', $harimau->darah, $elang->attackPower, $harimau->defencePower );

    echo '<br>';
    $elang->getInfoHewan();
    echo '<br>';
    $harimau->getInfoHewan();

    echo '<br> ################################# <br><br>';
    // 2. HARIMAU menyerang balik si ELANG
    $harimau->serang('ELANG'); 
    $elang->diserang('ELANG', $elang->darah, $harimau->attackPower, $elang->defencePower );

    echo '<br>';
    $elang->getInfoHewan();
    echo '<br>';
    $harimau->getInfoHewan();

    echo '<br> #################################<br><br>';
    // 3. HARIMAU menyerang balik si ELANG lagi...
    $harimau->serang('ELANG'); 
    $elang->diserang('ELANG', $elang->darah, $harimau->attackPower, $elang->defencePower );

    echo '<br>';
    $elang->getInfoHewan();
    echo '<br>';
    $harimau->getInfoHewan();

    //IYA GK SI PAK SEPERTI ITU MAKSUD SOALNYA? MOHON BIMBINGANNYA PAK UNTUK PENJELASAN TERKAIT INI, HEHE TERIMA KASIH PAK


?>