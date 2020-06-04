<?php

                    ####### This php will call another php  ####
    include "Student_login.php";      // As other php (i.e Student_login.php) in same folder we dont need to give the path of it

    echo "<br>We are in includefunction php";

    // require function is same as include 
    //but include function will execute the other portion if there is some error, but require funcion will kill the page in case of any error

?>