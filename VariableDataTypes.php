<?php

$whatisit = "George";
echo "Value is " . gettype($whatisit);
echo "<br>";


$whatisit = 88.9;
echo "Value is " . gettype($whatisit);
echo "<br>";

$whatisit = 17;
echo "Value is " . gettype($whatisit);
echo "<br>";

$whatisit = true;
echo "Value is " . gettype($whatisit);
echo "<br>";

$whatisit = null;
echo "Value is " . gettype($whatisit);

echo "<br>";

echo "Control structures and if else statements";
echo "<br>";
echo "Function to get date";

echo "The date of today is " . date("Y/m/d") . "<br>";
echo "The date of today is " . date("Y.m.d") . "<br>";
echo "The date of today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");


//loops

//with for loop
echo "<br>";
$studentNames = array("paul", "peter", "john");

echo sizeof($studentNames);
echo "<br>";

for($i =0; $i <sizeof($studentNames); $i++){
 
    //echo "student Name is "  . $studentNames[$i]  . "<br>";
    echo  $studentNames[$i] . " is at index " . $i ."<br>";

}

echo "<br>";

//with foreach loop

foreach ($studentNames as $key => $value) {
   echo $value . " is at index " . $key . "<br>" ;
}


//while loop

echo "<br>";
$a = 0;
while ($a < sizeof($studentNames)) {
    //echo "Displaying studentNames with while loop" . "<br>";
    //echo "Student Name is " . $studentNames[$a] . "<br>";
    echo $studentNames[$a] . " is at index " . $a . "<br>";
    $a++;
}


// Write a function that will take an array and get and display the frequency of each item on the array
// eg array('jane', 'peter', 'jane', 'jude'); 
/**
 * OUTPUT
 * jane occures 2 times
 * peter occurs 1 time
 * jude occurs 1 time
 * 
 * 
 */



















?>