<?php

    function    resolve_complexe($a, $b, $delta)
    {
        $delta *= -1;
        $res = array();
        
        $resultat = -$b / (2 * $a);
        $i = h_sqrt($delta) / (2 * $a);
        $res[0] = $resultat." - ".$i."i";
        $res[1] = $resultat." + ".$i."i";
        return ($res);
    }

    function    resolve_second()
    {
        $res = array();
        $delta = $b * $b - 4 * $a * $c;

        if ($delta < 0)
            $res = resolve_complexe($a, $b, $delta);
        else if ($delta == 0)
            $res[0] = -($b / (2  * $a));
        else
        {
            $res[0] = (-$b - h_sqrt($delta)) / (2 * $a);
            $res[1] = (-$b + h_sqrt($delta)) / (2 * $a);
        }
        return($res);

    }
    
    function    resolve_first($b, $c)
    {
        $res = array();
        if ($b == 0)
        {
            if ($c == 0)
                $res[0] = "Indeterminate equation.\n";
            else
                $res[0] = "Impossible equation.\n";
        }
        else
            $res[0] = (-$c) / $b;
        return($res);
    }

    function			resolve_zero($c)
    {
        $res = array();
        if ($c == 0)
            $res[0] = "Every real are solution.\n";
        else
            $res[0] = "No solution.\n";
    }

    function    resolve_polynome($a, $b, $c)
    {
        $res = array();
        if (!$a && !$b)
            $res = resolve_zero($c);
        else if (!$a)
            $res = resolve_first($b, $c);
        else
            $res = resolve_second($a, $b, $c);
        return($res);
    }
?>