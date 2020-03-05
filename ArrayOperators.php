<?php
function averageArray($Number){
    $Number = [4 ,8 ,6 ,1 ,2 ,9 ,4];
    $sophantu = 7 ;
    $tong = array_sum($Number);
    $tb = $tong/$sophantu;
    echo "1.gia tri trung binh cua mang la :".$tb;
}
function countEvens($Number){
    $Number = [4 ,8 ,6 ,1 ,2 ,9 ,4];
    $length = count($Number);
    $acount1 = 0;
    $acount2 = 0;
    for($i = 0; $i < $length; $i++){
        if($i % 2 == 0){
            $acount1 = ++;
            echo "2.1 So phan tu chan trong mang la:".$acount1;
            else($i % 2 != 0 ){
                $acount2=++;
                echo " 2.2 phan tu chan trong mang la:".$acount2;
            }
        }
    }
}
function decreaseArray($Number){
    $numbers = [4 ,8 ,6 ,1 ,2 ,9 ,4];
    rsort($numbers); 
    foreach( $numbers as $n) {
        echo "$n";
        echo " ";
    } 
}
function min2Arraymax2Array ($key,$numbers){
    $numbers = [4 ,8 ,6 ,1 ,2 ,9 ,4];
    rsort($numbers); 
    if(array_key_exists($key,$numbers)
    {
        $max2 = find_key(2,$numbers); 
        $min2 = find_key(6,$numbers);
        echo "4. Gia tri lon thu hai trong mang la:" .$max2;
        echo "5. Gia tri nho thu hai trong mang la:" .$min2;
    }
}    
}
averageArray($Number);
countEvens($Number);
decreaseArray($Number);
min2Arraymax2Array ($key,$numbers)
?>