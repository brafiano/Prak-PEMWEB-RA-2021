<?php


    function tambah($a, $b){
        $hasil = $a + $b;
             echo "<h3> PENJUMLAHAN </h3>";
             echo "Operator: + <br>";
             echo "Hasil = $hasil";
        }
    function kurang($a, $b){
        $hasil = $a - $b;
            echo "<h3> PENGURANGAN </h3>";
            echo "Operator: - <br>";
            echo "Hasil = $hasil";
        }
    function kali($a, $b){
        $hasil = $a * $b;
            echo "<h3> PERKALIAN</h3>";
            echo "Operator: * <br>";
            echo "Hasil = $hasil";
        }
    function bagi($a, $b){
        $hasil = $a / $b;
            echo "<h3> PEMBAGIAN</h3>";
            echo "Operator: / <br>";
            echo "Hasil = $hasil";
        }
    function mod($a, $b){
        $hasil = $a % $b;
            echo "<h3> MODULUS</h3>";
            echo "Operator: % <br>";
            echo "Hasil = $hasil";
        }
            echo "Bilangan 1 = 10 <br>";
            echo "Bilangan 2 = 5  <br>";
            echo "Berikut merupakan hasil dari operasi <br>";

        tambah(10, 5);
        kurang (10,5);
        kali(10,5);
        bagi (10,5);
        mod(10, 5);

?>