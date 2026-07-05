<?php

/*  
    VOIR SI ON AFFINE CETTE FONCTION POUR ARRONDIR AU MILLIONIEME PRES
*/

    function    h_sqrt($nbr)
    {
        $i = 1;
        $j = 0;
        $approx = 100;
        $precision = 9;
        if ($nbr == 0.0 || $nbr == 1.0)
            return ($nbr);
        while ($j < ($precision + 5) && $i * $i != $nbr)
        {
            while (($i * $i) != $nbr && ($i * $i) < $nbr)
                $i += $approx;
            if (($i * $i) != $nbr)
            {
                $i -= $approx;
                $approx /= 10;
            }
            $j++;
        }
        return ($i);
    }

    function    h_power($nbr, $power)
    {
        $tmp = $nbr;
        if ($power == 0)
            return (1);
        while ($power -1 > 0)
        {
            $nbr *= $tmp;
            $power--;
        }
        return ($nbr);
    }

?>