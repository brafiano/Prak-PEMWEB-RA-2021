<?php

    function urut(){
        $nama = array("Larine", "Aduh", "Qifuat", "toda", "Anevi", "Samid", "Kifuat", "Archetto", "Exusiai", "Dusk");
        sort($nama);
        print_r($nama);
    }

        echo "<h3> Data Nama acak = (Larine, Aduh, Qifuat, toda, anevi, Samid, Kifuat, Archetto, Exusiai, Dusk)</h3> <br>";
        echo "<h3> Data Yang telah Di Urutkan: </h3>";
        echo "<pre>";
        echo "<br>";
        urut();
        echo "</pre>";
        echo "<br>";
        echo "<br>";
?>