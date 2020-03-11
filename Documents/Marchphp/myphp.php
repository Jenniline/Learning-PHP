<?php
/*use o php explode*/
$str = array("My name is we");
$arr = "use of php implode";
// echo explode("-", $str);
$myvar= "my var is nice";
// print_r (explode(" ", $myvar);

// ?echo str_replace("use ", "name", $arr);*/

/*$var= "My name is we you";
$array=explode(" ", $var);


$str_size= sizeof($array);

echo $str_size;
echo "<br>";

for ($i=0; $i < $str_size ; $i++)
 { 
   echo $array[$i];
	if ($i == $str_size-1)
	 {
	 	
	 } 	
	 else{
	 	echo "-";
	 }
 }
 // output a single character in a string separated by "-"
    echo "<br>";
      $var =str_split("Hello world how are you doing");
      $var_size=sizeof($var);
      for ($i=0; $i < $var_size ; $i++) 
      { 
      	 echo $var[$i] ;
      	if ($i == $var_size-1 || $var[$i] == " " ) 
      	{
      		
      	}
      	else
      	{
      		echo "-";
      	}
      }*/


    /**
     * @desc this function .....
     *
     * @param string $str The string to be slugified
     * @param string $separator Where to break the string 
     * @return string The slugified string
     *
    */
  	function slugify(string $str, string $separator =" ") : string
  	{
    	$array = explode($separator, $str);
    	$arr_size = sizeof($array);
 		$slug = "";
    	for ($i = 0; $i < $arr_size; $i++) {  
  			$slug = $slug . $array[$i];
			if ($i == $arr_size-1) {	
		 		// no code
		 	} 	
		 	else { 
		 		$slug = $slug . "-";
		 	}
  		}
  		return $slug;
  	}

  	$slug = slugify('my name is jane runndy');
  
  	echo $slug; 
