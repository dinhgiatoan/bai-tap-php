<?php

$n = $argv[1] ; 
    if ($argv[1] == 1 || $argv[1] == 2)
    {
        echo "ket qua la : 1";
    }
    else if ($argv[1] > 2)
    {
        $kq = $argv[1] - 1 + $argv[1] -3 ;
        echo "ket qua la : ".$kq." ";

    }
function PrinStart(){
    for ($i = 1 ; $i <= 34 ; $i ++){
    echo "*";
    }
}
?>