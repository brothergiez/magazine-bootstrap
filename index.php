<?php
	require 'vendor/autoload.php';

	$app = new \Slim\Slim(array(
		"view" => new \Slim\Extras\Views\Twig()
	));

	$app->base_url = function ()use($app) {
		$req 		= $app->request();
		$root_uri 	= $req->getRootUri();
		return $root_uri;
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
		$app->render('/body/index.php');
	});

	$app->get('/detail', function ()use($app){
		$app->render('/body/detail.php');
	});


	$app->run();
?>