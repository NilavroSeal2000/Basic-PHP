<?php
                #########       Session     ##########
    
    session_start();        ///It will active the session for below variable

    $_SESSION['Name']='Nilavro';
    $_SESSION['Age']='19';

    echo "Done";

    /// If we include this to other php we can use the sessionn name age by using $_SESSION['Name'], $_SESSION['Age'] etc if the session is active 

    // by using unset[$_SESSION['Name]] we can unset the Name it is like loging out of the session it will destroy the session variable


?>