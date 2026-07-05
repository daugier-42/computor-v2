<?php

/*      
        FAIRE LA PARTIE POUR CHECKER SI LES STRINGS SONT BIEN FORMATEE
        EN STOCKANT LES VARIABLES ET LEURS VALEURS
*/

    function filter_null($var)
    {
        return ($var != "");
    }

    function    reduce_partie($str)
    {
        $ascii = "qwertyuiopasdfghjklzxcvbnm";
        $regex = "0123456789.+-*/%qwertyuiopasdfghjklzxcvbnm()?,;[]";

        $explode = explode (" ", $str);
        $explode = array_filter($explode, "filter_null");
        $reduce = implode ($explode);
        
        $i = -1;
        while ($reduce[++$i])
        {
            if (strpos($regex, $reduce[$i]) == false)
                return ("\033[01;31mError : Caractere '".$reduce[$i]."' is illegal \033[0m \n");
        }
        return ($reduce);
    }
    
    function    parse_first_partie($str, &$variable)
    {
        $str  = trim($str);
        if (empty ($str) && $str != '0')
        {
            echo "\033[01;31mError : Nothing before '=' \033[0m \n";
            return (0);
        }
        $reduce = reduce_partie($str);
        // $reduce = verif_partie($reduce, 1);
        return (0);
    }
   
    function    parse_second_partie($str, &$variable)
    {
        $str  = trim($str);
        if (empty ($str) && $str != '0')
        {
            echo "\033[01;31mError : Nothing before '=' \033[0m \n";
            return (0);
        }
        $reduce = reduce_partie($str);
        // $reduce = verif_partie($reduce, 2);
        return (0);
    }

    function    parse_string($str, &$variable, &$save_commande)
    {
        if (!empty ($str))
        {
            $i = -1;
            if ($str == 'exit' || $str == 'quit')
                return (-1);
            if ($str == 'last')
            {
                if (empty ($save_commande))
                    return ("No commande commit yet\n");
                else
                    return ("Last command : ".$save_commande[count($save_commande) - 1]."\n");
            }
            $partie = explode ('=' , $str);
            if (count($partie) != 2)
                return ("\033[01;31mError : Wrong number of '=' \033[0m \n");
            $save_commande += array(count($save_commande) => $str);
            if (($res_first = parse_first_partie($partie[0], $variable)) !== 0)
                return ($res_first);
            if (($res_second = parse_second_partie($partie[1], $variable)) !== 0)
                return ($res_second);
        }
        return (1);
    }

?>