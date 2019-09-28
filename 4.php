<?php

	function thirdHighest($array)
	{
		if(is_array($array))
		{
			if(count($array)>2)
			{	
				$i = 0;
				foreach($array as $element)
				{
					if(is_numeric($element))
					{
						$newArr[$i] = $element;
						$i++;
					}
					else{}
				}
				//var_dump($newArr);
				rsort($newArr);
				//var_dump($newArr);
				echo $newArr[2];
			}
			else
			{
				echo "Minimal array length is 3!";
			}
		}
		else
		{
			echo "Parameter should be an array!";
		}
	}
	
	thirdHighest([1,2,3,4,5,6]);
	echo "<br>";
	thirdHighest("bukan array nih");
	echo "<br>";
	thirdHighest([1,2]);
	echo "<br>";
	thirdHighest([107,1,-4,'a','true',0, -77]);
	echo "<br>";
	
?>
