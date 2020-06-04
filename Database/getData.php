<?php
//mysqli_connect($mysql_host,$mysql_user)
require 'connect.php';      // It will connect the connect.php

$query = "SELECT * FROM `user_info` WHERE 1";

$is_query_run = mysqli_query(mysqli_connect($mysql_host,$mysql_user),$query) or die("Problem"); 

while($query_execute = mysqli_fetch_assoc($is_query_run))
{
    echo $query_execute['Name'];
}

?>