<?php

	function Check($string)
	{
		if(!preg_match('/^[^0-9]+$/',$string))
		{
			echo $numS = preg_replace("([^0-9]+)","",$string);
			$arrNums = str_split($numS);
			sort($arrNums);
			echo "<br>";
			echo $newNums = implode('',$arrNums);
		}
		else
		{
			echo "No number found in parameter!";			
		}
	}
	
	Check("48172a94");
	echo "<br>";
	echo "<br>";
	Check("abc");
	echo "<br>";
	echo "<br>";
	Check("94a");
	echo "<br>";
	echo "<br>";
?>