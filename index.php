

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portal Administrativo</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="container">
		<h1>Portal Administrativo - Adilson Calixto</h1>

		<?php 

			require_once("vendor/autoload.php");

			$app = new \Slim\Slim();

			$app->config('debug', true);

			$app->get('/', function() {
    
			echo "OK";

			});

			$app->run();

 		?>
		
	</div><!--FIM DA DIV ID CONTAINER-->
	
</body>
</html>


