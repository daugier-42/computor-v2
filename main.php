<?php

    include_once('parse.php');
    include_once('resolve.php');
    inclue_once('outils.php');
    inclue_once('matrice.php');
    inclue_once('polynome.php');

/*  
    Je definis mon tableau avec tous les types de variables dont je vais me servir pendant tout le programme
*/
    $variable = array(
            'complexes'      => array()
            , 'functions'    => array()
            , 'reels'        => array()
            , 'matrices'     => array()
    );

    $save_commande = array();
/*
    Je cree ma boucle infini tant que l'utilisateur n'a pas ecrit "exit"
*/
    $i = 1;
    while ($i)
    {
        echo "> ";
        $ligne = fgets(STDIN);
        $replace = array("\r\n", "\n", "\r");
        $ligne = str_replace($replace, '', $ligne);
        $ligne = trim($ligne);
        if (!empty ($ligne))
        {
            /*
                J'appelle ma fonction parse
            */
            $type = parse_string(strtolower($ligne), $variable, $save_commande);
            if ($type == -1)
                $i = 0;
            else if (!is_int($type))
                echo "$type";
            else
                make_operation($variables, $type);
            $ligne = '';
        }
    }

/*
    Message de fin quand il a choisit de quitter le programme
*/
    echo "\nBye, Thanks for using me !\n";
?>