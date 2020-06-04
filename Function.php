<?php

                        #######      Functions and other basic       ##########

    function add($num1,$num2)
    {
        $result = $num1 + $num2;
        return $result;
    }       // It will return $result

    $a = 100;
    $b  = 200;
    echo add($a,$b);
    echo "<br><br>";


                        #############    Date & Time     #################

    $date = date('d/m/Y'); /// Give server date as day/month/year
    echo $date;
    $time = date('H:i:s');  ///Give servers Hour Minutes second
    echo "<br> $time";
    //  Search more format in php.net


                        ############# Global Variable       ########
    $nam = " Nilavro ";     // It is a global variable

    function show()
    {
        global $nam;    //otherwise we cant print name as it is global we have to declare it
        echo "<br>Hello $nam <br>";
    }
    show();

?>