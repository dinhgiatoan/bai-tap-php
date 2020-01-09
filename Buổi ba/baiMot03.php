    <?php

    $x=$argv;

    if ($argv[1]>40){
        echo "Extra strong liquor";
    }
    else if(20<$argv[1] && $argv[1] <=40)
    {
        echo "Strong liquor";}

    else if(15<$argv[1] && $argv[1] <=20)
    {
        echo "Liquor";}

    else if(12<$argv[1] && $argv[1] <=15)
    {
        echo "Strong vine";}

    else if(10.5<$argv[1] && $argv[1]<=12)
    {
        echo "Normal vine";}
    else if ($argv[1]<=10.5)
    {
        echo "Light vine";}
    ?>