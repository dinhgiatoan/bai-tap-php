<?php

$a = argv[1];
$b = argv[2];

function DivisorMultiple($a,$b){
$so_nho_hon = ($a < $b)?$a:$b;

$i = 1;
do  
{
    if ($a%$i == 0 && $b%$i ==0)
    $ucln = $i ; $i++;
}
while ($i <= $so_nho_hon)
$bcnn = ($a*$b)/$ucln;

echo "ucln cua ".$a." và ".$b." la : ".$ucln."";
echo "/n";
echo "bcnn cua ".$a." và ".$b." la : ".$bcnn."";
}
function PrinStart(){
    for ($i = 1 ; $i <= 20 ; $i ++){
    echo "*";
    }
    echo "\n";
}
PrinStart();
DivisorMultiple();
PrinStart();
?>