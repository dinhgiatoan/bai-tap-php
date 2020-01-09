        <?php
        function Hello(){
        $a = " Ho va ten : Dinh gia toan      ";
        $b = " Ngay sinh : 01/05/1998         ";
        $c = " Que quan  : Gia Vien Ninh Binh ";
        $d = " Sơ thich  : Lap trinh          ";
        echo "\n$a";
        echo "\n$b";
        echo "\n$c";
        echo "\n$d";
        }
        function PrinStart(){
        for ($i = 1 ; $i <= 20 ; $i ++)
        {
        echo "*";
        }
    
        }
        PrinStart();
        Hello();
        echo"\n";
        PrinStart();
        ?>