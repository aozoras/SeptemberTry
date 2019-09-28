<?php

	function countChar($string, $char)
	{
		$newS = preg_replace('([^'.$char.']+)','',$string);
		$len = strlen($newS);
		
		if($len!=0)
		{
			echo $len;
		}
		else
		{
			echo "Not found!";
		}
	}
	
	countChar("arkademy", "a");
	echo "<br>";
	countChar("javascript", "x");
	echo "<br>";
?>