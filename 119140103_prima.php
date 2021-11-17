<?php


    function prima($r, $d){
     for($i=$r; $i<=$d; $i++){
        $e = 0;
        for($j=1;$j<=$i;$j++){
            if($i % $j == 0){
                $e++;
            }
        }
        if($e == 2){
         echo $i.'      ';
        }
     }
    }
    echo "<br>";
    prima(0, 50);
    echo "<br>";
    echo "Merupakan Bilangan prima dari 1-50 ";

?>