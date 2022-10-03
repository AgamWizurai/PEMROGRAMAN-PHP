<?php
    require_once 'Lingkaran.php';
    require_once 'PersegiPanjang.php';
    require_once 'Segitiga.php';

    $lingkaran = new Lingkaran('5');
    $persegi_panjang = new PersegiPanjang('10', '20');
    $segitiga = new Segitiga('10', '5', '12', '16', '18');

    $bidang = [$lingkaran, $persegi_panjang, $segitiga];

    foreach ($bidang as $bd) {
        echo $bd->namaBidang();
        echo '<br />'.$bd->luasBidang();
        echo '<br />'.$bd->kelilingBidang();
        echo '<hr />';
    }