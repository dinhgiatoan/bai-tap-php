<?php
    function layUsername(){
        $dau_vao  = 'vietlv@apextech.edu.vn';  
		$username = strstr($dau_vao, '@', true);  
		echo $username;
    }
    function PrintStart(){
        for($i=1 ; $i<=20 ; $i++){
            echo "*"; 
        }
        echo "\n";
    }
    PrintStart();
    layUsername();echo "\n";
    PrintStart();
?>