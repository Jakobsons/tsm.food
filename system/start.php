<?php
	//starting app
	require_once('/var/www/vhosts/foodunion.lv/tsm.foodunion.lv/config.php');

	//router
	require system.'router.php';

	$router = new Route;
	echo $router->getRoute();
