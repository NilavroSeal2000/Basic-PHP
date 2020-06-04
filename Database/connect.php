<?php

                        #######     It will connect the php to the database     ##########
// Most of the functions are depricatde check internet for new

$mysql_host = 'localhost';
$mysql_user = 'root';
//$mysql_password = password; give the 3rd argument if you have password

if(!@mysqli_connect($mysql_host,$mysql_user))  //mysql is depricated && if user cradential is fail it shows "Connection failed" which is inside die
{                                               //@ removes warninng only shows die message it is optional

   die (' Cannot connect to database');
}
else
{
    if(@mysqli_select_db(mysqli_connect($mysql_host,$mysql_user),'student'))    //provide database table name inside the function
    {
        echo 'Connection Successful <3 <br>';
    }
    else
    {
        echo "Connection Failed to the Table";
    }
    
}

?>