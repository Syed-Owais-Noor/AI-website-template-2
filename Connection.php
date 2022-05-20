<?php
	
	try 
	{
		$connect = mysqli_connect("localhost","root","","ai_world");
	}

	catch (PDOException $f)
	{
			echo $f->getmessage();
	}

?>