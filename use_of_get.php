<?php
                    #######             GET Method            ########

//It is a super global variable that means we can use it anywher in this php

// In URL after the php name write ? varable_name = value Then it will print that value in screen if it is not called
//Check the URL
if(isset($_GET['student_name'])  &&  isset($_GET['student_age'])   &&   isset($_GET['student_email']))  // It check all the variable set or not
{
    $name=$_GET['student_name'];
    $age=$_GET['student_age'];
    $mail=$_GET['student_email'];

    if(!empty($name)&&!empty($age)&&!empty($mail))      // It will check fields are empty or not
    {
        echo 'Name : '. $_GET['student_name'].'<br>'; 
        echo 'Age : '. $_GET['student_age'].'<br>';
        echo 'Email : '. $_GET['student_email'].'<br>';
    }
    else
    {
        echo "<br> Please enter your details";
    }
}


?>