        <?php

        function vampire($n){
            if($n % 2 == 0 && strlen($n) %2 == 0){
                $element1 = getElement($n);

                for($i = 10 ; $i < 100 ; $i++){
                $j = $n/$i;
                if( $j >= 10 && $j < 100 && is_int($i) ){

                    $m = $i*100 + $j;
                    $element2 = getElement($m);
                    if (strcmp( $element1 , $element2){
                         echo "dung la so vampire";
                    }

            }


                }
            }
            else{
                echo $n."khong là so thoa man";
            }
        }

    function getElement($n){
        $a = $n % 10;
        $b = ($n/10) % 10;
        $c = ($n/100) % 10;
        $d = ($n/1000) % 10;

        $arr = [$a,$b,$c,$d];
        sort($arr);
        return implode("",$arr);

    }

        ?>