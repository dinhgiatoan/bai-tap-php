<?php

function giaiptb1($b,$c)
{
    if($b == 0)
        {
            if($c == 0)
            {
                $nghiem = "vo so nghiem";
            }
            if($c <> 0)
            {
                $nghiem = "vo nghiem";
            }
        }
        else
        {
            $x = -($c)/($b);
            $nghiem = "pt co nghiem :x = $x";
        }
    return $nghiem;

}
function giaiptb2($a , $b , $c )
{
    if($a==0)
    {
        $nghiem = giaiptb1($b,$c)
    }
    if($a<>0)
    {
        $delta = pow ($b,2)-4*$a*$c;
        if($delta<0)
        $nghiem = "pt vo nghiem";
        if($delta==0)
        {
            $kep = (-$b)/(2*$a);
            $nghiem = "nghiem kep x1 = x2 = $kep";
        }
        if($delta>0)
        {
            $can = sqrt($delta);
            $x1 = (-$b+$can)/(2*$a);
            $x2 = (-$b-$can)/(2*$a);
            $nghiem = "2 nghiem phan biet x1 = ".round($x1,2) .",x2 = "around($x2,2);

        }
    }
        return $nghiem;
}
?>