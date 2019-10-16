<?php
	try
	{
	 $dsn = "mysql:host=mysli.oamk.fi;dbname=opisk_t8lete03";
	 $db = new PDO ($dsn, "t8lete03", "xxzC4NBoqeSqSKjB");
	 //print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>