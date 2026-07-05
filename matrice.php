<?php


/*      FAIRE LA DIVISION DE MATRICE PAR UNE AUTRE ET LE PRODUIT SCALAIRE D'UNE DIVISION        */
/*      ET FINIR PAR LE MODULO          */


// array (
//     '0' => array (
//                 '0'  => 1
//                 ,'1' => 2
//                 ,'2' => 3
//                 )
//     ,'1' => array (
//                 '0'  => 1
//                 ,'1' => 2
//                 ,'2' => 3
//                 )
//     ,'2' => array (
//                 '0'  => 1
//                 ,'1' => 2
//                 ,'2' => 3
//                 )
//     );

    function        aff_matrice($var)
    {
        foreach ($var as $key => $l)
        {
            echo "[ ";
            foreach ($l as $key_l => $c)
            {
                echo $c;
                if (isset ($l[$key_l + 1]))
                    echo " , ";
            }
            echo " ]\n";
        }

    }

    function        add_matrice($var1, $var2)
    {
        $res = array();
        
        if (isset ($var1) && isset($var2))
        {
            foreach ($var1 as $key => $l)
            {
                foreach ($l as $key_l => $c)
                {
                    $res[$key][$key_l] = $c + $var2[$key][$key_l];
                }
            }
        }
        return ($res);
    }

    function        sub_matrice($var1, $var2)
    {
        $res = array();
        
        if (!empty ($var1) && !empty($var2))
        {
            foreach ($var1 as $key => $l)
            {
                foreach ($l as $key_l => $c)
                {
                    $res[$key][$key_l] = $c - $var2[$key][$key_l];
                }
            }
        }
        return ($res);
    }

    function        mult_matrice($var1, $var2)
    {
        $res = array();
        $i = -1;
        $nb_l = count($var1);
        $nb_col = count($var2[0]);
        $tmp = -1;
        
        while (++$i < $nb_l)
        {
            $j = -1;
            while (++$j < $nb_col)
            {
                $res[$i][$j] = 0;
                $tmp = -1;
                while (++$tmp < count($var1[$i]))
                    $res[$i][$j] += ($var1[$i][$tmp] * $var2[$tmp][$j]);
            }
        }
        return ($res);
    }

    function        div_matrice($var1, $var2)
    {
        $res = array();
        $i = -1;
        $nb_l = count($var1);
        $nb_col = count($var2[0]);
        $tmp = -1;
        
        while (++$i < $nb_l)
        {
            $j = -1;
            while (++$j < $nb_col)
            {
                $res[$i][$j] = 0;
                $tmp = -1;
                while (++$tmp < count($var1[$i]))
                    $res[$i][$j] += ($var1[$i][$tmp] * 1 / $var2[$tmp][$j]);
            }
        }
        return ($res);
    }
    
    function        scale_matrice($var1, $var2)
    {
        $res = array();

        foreach ($var1 as $key => $l)
        {
            foreach ($l as $key_l => $c)
            {
                $res[$key][$key_l] = $c * $var2;
            }
        }
        return ($res);
    }


?>