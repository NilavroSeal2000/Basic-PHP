<?php

// $ sign is used for declairing variable and its data type will be initialised initialisation
// It is case sensative ie. B is different from b
// $_POST , $_SERVER these are reserved variable

// <br> is a html tag,  php also supports HTML Tag inside it
                                                        #########   Basics of PHP           #########
$value =25;
$name = "Nilavro Seal";
$multiply = ($value * 20);

echo "$value <br>";  // we can also use    echo $value
echo $name , "<br>";
echo "25 * 20 =" ,$multiply;
echo '<br>$name<br>'; // It will print what is inside the ' ' quotes
echo "Hello " . $name . "<br>";      // . is concatination symbol
echo '<a href="http://www.google.com"> Google </a>';  // a href is for linking another page like HTML
echo "<br><br>";


                                                        ##########    IF ELSE IN PHP        ##########

echo "<br>### If else statement ###<br>";
$num1 = 100;
$num2 = 250; 
if($num1 == $num2)   // a===b a and b are eaqual or not and type same or not  '10' == 10 will give true but '10' === 10 is false
{
    echo "<br> Num 1 is = NUm 2";
}
else
{
    echo "<br> Two number are not equal<br>";
}
echo "<br><br>";
/*
    === equal type
    !== not of equal type but equal value
    !=  or <> not equal to
*/



                                                        ###########     ARRAY IN PHP        ##########
//Array index starts with 0 like C or C++
echo "###     ARRAY IN PHP        ###<br>";
$NAME = array('Nilavro','Soumya', 'Arnab','Kalpodipto');
echo $NAME[2] . '<br>';   // It will print 3rd element of the array ie. Arnab
$NAME[4]='Suvodeep';     // It will add Suvodeep to the 5th Position of the array 
print_r($NAME);         // It will print the whole array with indexing
echo "<br><br>";
//Associative arrays
$fruit = array('Apple'=>50,'Banana'=> 12,'Lemon' => 5);  // It is Associative array that is Index has name and value associated with it
print_r($fruit);
echo "<br> Price of banana is " .$fruit['Banana'].'<br>';
//Multidimensional Array
$student = array(array('Mark',15,49),
                array('Tom',16,58),
                array('Mick',15,53));

print_r($student).'<br>';
echo $student[0][0] . '<br>';  // It will print the names
echo $student[1][0] . '<br>';
echo $student[2][0] . '<br>';

?>