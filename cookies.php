<?php

                ########        Cookies     #######
    
    //setcookie(name of the cookie,value,expire);

    $time = time();  
    echo $time;   /// current epoch time
    setcookie('student','Nilavro',$time+10);        ///This cookies  will remain in the page for 10 sec
    //whenever we run this page cookie will get initialize

?>