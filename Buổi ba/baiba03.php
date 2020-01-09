        <?php
        $bien = $argv;
        function Schedule($bien){
        switch ($bien) {
            case '1':
            echo "Chu nhat dc nghi";
                break;
            case '2':
                echo "Thu hia hoc sang";
                break;
            case '3':
                echo "Thu ba hoc sang";
                break;
            case '4':
                echo "Thu tu hoc chieu";
                break;
            case '5':
                echo "Thu nam hoc sang";
                break;
            case '6':
                echo "Thu sau hoc chieu";
                break;
            case '7':
                echo "Thu bay hoc chieu";
                break;
            default:
                echo "nhap sai roi";
                break;
            }
            function PrinSchedule(){
                for ($i = 1 ; $i <= 20 ; $i ++){
                echo "*";
                }
            }
                echo "\n";
        }
        Schedule();
        PrinSchedule();
        Schedule();
        ?>