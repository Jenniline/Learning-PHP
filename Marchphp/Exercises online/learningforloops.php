<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    
<?php
//commit these today infact now

//program to get the squaes of numbers from 1 to 12

for ($i=0; $i<=12 ; $i++) { 
    $result = $i * $i ;
    echo "$i * $i = $result <br> \n"
    ;
}
echo "<br>";

//to display multiplication table using html table
//use of nested for loops

echo  "<table border=\"1\">";


for ($row=1; $row <= 12 ; $row++) { 
    echo "<tr>\n";
    for ($col=0; $col <= 12 ; $col++) { 
        $x = $col * $row;
        echo "<td>$x<td>\n";
    }
    echo "<tr>";
}

echo "<table>";



?>




</body>
</html>

