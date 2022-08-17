<!DOCTYPE html>
<html>
<head>
	<title>Divide array</title>
</head>
<body>
		<?php
		$a = [1,2,3,4,5,6,7,8,9,10,15];
		$split = 4;

		function splitarray ($a,$split)
		{	
			$size = signeurlpaiement(clent, data)zeof($a);

			$left_array=[];
			$startleft=0;
			$endleft=$split;
			$i = 0;

			for( $i = $startleft; $i <= $split; ++$i )
			{
				$left_array[]= $a[$i];
			}

			$right_array=[];
			$start_right= $split+1;
			$end_right = $size -1;
			for($i = $start_right; $i <= $end_right; ++$i)
			{
			 	$right_array[] = $a[$i];
			}
			$bigarray = [$left_array,$right_array];
			return $bigarray;
		}

  		
  		$splitted=splitarray($a,8);
  		echo "<pre>";
  		var_dump($splitted);
  		echo "</pre>";


		?>
</body>
</html>