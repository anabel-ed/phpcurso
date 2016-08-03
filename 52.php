<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	try
	{
		
		$base = new PDO('mysql: host=localhost, dbname=prueba', 'root', 'root');
		echo "Conección OK!";
	
	}catch(Exception $e)
	{

		die('Error: ' . $e->GetMessage());

	}finally
	{
		$base = null;
	}

?>
</body>
</html>