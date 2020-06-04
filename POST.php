<?php

//$_POST[ " variable name "];

//$_POST["name"]; this is now a variable excepted from the POST Method
//$_POST["password"];

if(($_POST["name"]==="Navonil") && ($_POST["password"]==="Passcode"))
{
    echo "username and Password is correct";
}
else
{
    echo "username and Password is incorrect";
}

?>