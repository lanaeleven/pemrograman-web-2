<?php
    $jari_jari_tabung = 4.2;
    $tinggi_tabung = 5.4;
    $volume_tabung = 22 / 7 * $jari_jari_tabung**2 * $tinggi_tabung;
    echo "NIM 0/1 : Bangun ruang tabung = ";
    echo  number_format($volume_tabung, 3), " m3";

    $jari_jari_kerucut = 4.2;
    $tinggi_kerucut = 5.4;
    $volume_kerucut = 22 / 7 * $jari_jari_kerucut**2 * $tinggi_kerucut / 3;
    echo "<br>NIM 2/3 : Bangun ruang kerucut = ";
    echo  number_format($volume_kerucut, 3), " m3";

    $jari_jari_bola = 4.2;
    $volume_bola = 4/3 * 22/7 * $jari_jari_bola**3;
    echo "<br>NIM 4/5 : Bangun ruang bola = ";
    echo  number_format($volume_bola, 3), " m3";

    $alas_segitiga = 3.5;
    $tinggi_segitia = 4.4;
    $tinggi_prisma = 5.4;
    $volume_prisma = $alas_segitiga * $tinggi_segitia / 2 * $tinggi_prisma;
    echo "<br>NIM 6/7 : Bangun ruang prisma alas segitiga = ";
    echo  number_format($volume_prisma, 3), " m3";

    $panjang_alas = 8.9;
    $lebar_alas = 14.7;
    $tinggi_limas = 5.4;
    $volume_limas = $panjang_alas * $lebar_alas * $tinggi_limas / 3;
    echo "<br>NIM  8/9 : Bangun ruang limas alas persegi panjang = ";
    echo  number_format($volume_limas, 3), " m3";
?>