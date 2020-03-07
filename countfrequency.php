<?php


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


function displayFrequency(  $items = array('jane', 'peter', 'jane','jude' )) {
    $x = 0;
    echo $items[$x] . "occures  " . countFrequency($items) . "time". "<br>";
    $x++;
    
}

function countFrequency($items){
    $arraySize = sizeof($items);
    $count = 0;
    for ($i=0; $i < $arraySize ; $i++) { 
      for ($j=$i+1; $j >= $i ; $j++) { 
         if ($items[$i] == $items[$j]) {
           $count = $count + 1;
           $j++;
         }else {
             $j++;
         }
      } 
      $i++;
    }
    return $count;
 
}



?>