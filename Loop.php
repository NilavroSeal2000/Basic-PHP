<?php

                                            #########   Loop in PHP     ########
    // While Loop
    $counter = 1;
    while($counter <= 5)
    {
        echo "Hello World $counter <br>";
        $counter = $counter + 1;        // We can also use $counter++
    }
    echo "<br><br>";
    
    
    // Do while Loop
    $counter = 1;
    do{
        echo "Hello World $counter <br>";
        $counter++;
    }while($counter <= 5);  //Same as C or C++
    echo "<br><br>";
    
    //For Loop
    for($counter = 1 ; $counter <= 10 ; $counter++)
    {
        echo "This is For loop $counter <br>";
    }
    echo "<br><br>";
    
    //For each  Loop
    $name = array('Ishita','Debonita','Sandipa','Dipita','Shrayanika');
    foreach($name as $i)        // i will contain each and evrey value of the array name
    {
        echo "Name = $i <br>";
    }
    echo "<br><br>";
    
    //For each  Loop with multidimensional associative array
    $players = array(  array('Name'=>'Messi', 'No'=>10 , 'Nationality'=> 'Argentina'),
                      array('Name'=>'Ronaldo', 'No'=>7 , 'Nationality'=> 'Portugal'),
                      array('Name'=>'Chatri', 'No'=>11 , 'Nationality'=> 'India'),
                      array('Name'=>'Neymar', 'No'=>10 , 'Nationality'=> 'Brazil'));

    foreach($players as $p=>$innerarray)        // p is the main array and inner array holds the data inside it
    {
        echo "<b><br><br> Player no: $p </b> <br>";
        foreach($innerarray as $x)
        {
            echo "$x"."<br>";
        }
    }


?>