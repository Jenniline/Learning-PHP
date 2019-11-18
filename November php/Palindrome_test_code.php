<?php


    /*
    function Palindrome($string)
    {
            if(strrev($string == $string))
        {
            return 1;
        }
        else {
            return 0;
        }

    }
    //test
    $original = "DAD";
     if (Palindrome($original)) {
         echo "String is a Palindrome";
     }
     else {
         "Not a Palindrome";
     }

*/
$count=0;
$a="madam";
for($i=0;$i<strlen($a);$i=$i+1)
{
    if($a{$i}==$a{strlen($a)-$i-1})
    {
    $count=$count+1;
    }
}
if($count==strlen($a))

echo "The string is a palindrome";
else
echo "The string is not a palindrome";


?>