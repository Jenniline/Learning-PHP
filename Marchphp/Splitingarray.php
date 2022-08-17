<!DOCTYPE html>
<html>
<head>
	<title>spliting arrays </title>
</head>
<body>
	<?php
			$a = sizeof(array(1,2,3,4,5,6,7,8,9,10,15));
			echo $a;
			
		
			
			function splitarray($array,$splitindex)
		
			{		
				$array= sizeof($array);
				echo $array ."<br>";

				if($a[i] >= $a[2] )
				{
					$leftarray= $a[i];
					$a ++;

				}
				else
				{
					$rightarray= $a[i];	
					$a ++;
				}
				return $leftarray ;	$rightarray;
				echo $leftarray;
				echo $rightarray;
			}
			$a  = array(1,2,3,4,5,6,7,8,9,10,15);
			splitarray($a,2);




			// $i = 0;

			// 	function split($array,$splitindex)
			// 	{   for ($array[i]=0; $array[i] < $array-1; $array[i]++) { 
			// 		# code...
			// 	}
			// 		{
			// 			$cuthere=$splitindex;
			// 			if($array[$i]=$cuthere)
			// 			{
			// 				$array/2;
			// 			}
			// 			else
			// 			{
			// 				echo "bad";
			// 			}
			// 		}	
			// 	}
			// $a= array(1,2,3,4,5,6,7,8,9,10,15);	
			// split($a,2);





	?>
</body>
</html>