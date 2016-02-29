<?php
	require 'vendor/autoload.php';

	$app = new \Slim\Slim(array(
		"view" => new \Slim\Extras\Views\Twig()
	));

	$app->base_url = function ()use($app) {
		$req 		= $app->request();
		$root_uri 	= $req->getRootUri();
		$del_uri 	= "index.php";
		$rm_uri 	= strpos($root_uri, $del_uri);
		if($rm_uri !== false){
			$base_url 	= str_replace("/index.php", "", $root_uri);
			return $base_url;
		}else{
			return $root_uri;
		}
	};

	$app->hook('slim.before.dispatch', function () use ($app) {
		$app->render('/layout/header.php');
	});
	  
	$app->hook('slim.after.dispatch', function () use ($app) {
		$app->render('/layout/footer.php');
	});	

	$app->hook('slim.before', function () use ($app) {
    	$app->view()->appendData(array('baseUrl' => $app->base_url));
	});

	$app->get('/', function ()use($app){
		$db = dbConnection();
		$statement 	= $db->prepare("select * from users");
		$statement->execute();
		$row = $statement->fetch();
		// echo "<pre>";
		// print_r($row);
		// echo "</pre>";
		$app->render('/body/index.php');
	});

	$app->get('/detail', function ()use($app){
		$app->render('/body/detail.php');
	});

	function dbConnection(){
		return new PDO('mysql:host=localhost;dbname=siapadia','root','helpme911');
	}

	$app->run();
?>