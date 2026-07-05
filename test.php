<?php
    include_once('outils.php');
    include_once('matrice.php');


    $var1 = array (

        
        0 => array (
                0  => 9
                ,1 => 9
                )
    ,1 => array (
                0  => 8
                ,1 => 8
                )
            );
//     $var1 = array (

        
//         0 => array (
//                 0  => 51
//                 ,1 => 23
//                 , 2 => 56
//                 )
//     ,1 => array (
//                 0  => 3
//                 ,1 => 2
//                 , 2 => 1
//                 )
//     ,2 => array (
//                 0  => 105
//                 ,1 => 25
//                 , 2 => 3
//                 )
//             );
  
    $var2 = array (
            0 => array (
                        0  => 1
                        ,1 => 2
                        , 2 => 3
                        , 3 => 15
                        )
            ,1 => array (
                        0  => 1
                        ,1 => 2
                        , 2 => 3
                        ,  3 => 16
                        )
            );
//     $var2 = array (
//             0 => array (
//                         0  => 15
//                         ,1 => 0
//                         , 2 => 1
//                         )
//             ,1 => array (
//                         0  => 5
//                         ,1 => 6
//                         , 2 => 7.8
//                         )
//             ,2 => array (
//                         0  => 5
//                         ,1 => 3.5
//                         , 2 => 6
//                         )
//             );

    aff_matrice (div_matrice($var1,$var2));

?>