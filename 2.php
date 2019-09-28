<?php

	function verUser($user)
	{
		if(preg_match('/^(\w){6}$/',$user))
		{
			if(preg_match('/^[^0-9]+$/',$user))
			{
				if(!preg_match('/^([a-z]{6}|[A-Z]{6})$/',$user))
				{	
					echo "Valid";
					return true;
				}
				else
				{
					echo "Invalid";
					return false;
				}
			}
			else
			{
				echo "Invalid";
				return false;
			}
		}
		else
		{
			echo "Invalid";
			return false;
		}
	}
	
	verUser("coba12");
	echo '<br>';
	verUser("Devina");
	echo '<br>';
	
	function verPass($pass)
	{
		if(preg_match('/^7[\w\W]{4,9}$/',$pass))
		{
			if(!preg_match('/^[^A-Z]+$/',$pass))
			{
				if(!preg_match('/^[^\W]+$/',$pass))
				{
					echo "Valid";
					return true;
				}
				else
				{
					echo "Invalid";
					return false;
				}
			}
			else
			{
				echo "Invalid";
				return false;
			}
		}
		else
		{
			echo "Invalid";
			return false;
		}
	}
	
	verPass("p@ssW0rd9");
	echo '<br>';
	verPass("7Ark@demi");
	echo '<br>';
?>