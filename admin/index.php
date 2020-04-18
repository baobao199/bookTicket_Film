<?php 
	require_once("../config.php");
	require_once("../function.php");

	$supported_controller = array(
		'admin' => array('login'),
		'home' => array('index','error'),
		'filmmanager' => array('index','add','delete','edit','upload','update'),
		'outstanding' => array('index','add','delete','edit','upload','update'),
		'ticketmanager' => array('index','add','delete','edit','upload','update'),
		'movietheater' => array('index','add','delete','edit','upload','update','outstanding'),
		'moviecomingsoon' => array('index','add','delete','edit','upload','update'),
		'showtime' => array('index','add','delete','edit','upload','update'),
		'customer' => array('index','add','delete','edit','upload','update'),
		'slide' => array('index','add','delete','edit','upload','update'),
		'promotion' => array('index','add','delete','edit','upload','update'),
		'customer' => array('index'),

	);

	if(isset($_GET['controller']))
	{
		$controller = $_GET['controller'];
		if(isset($_GET['action'])){
			$action = $_GET['action'];
		}
		else
		{
			$action = 'index';
		}
	}
	else
	{
		if(isLoggedIn()){
			$controller = 'home';
			$action = 'index';
		}
		else{
			$controller = 'admin';
			$action = 'login';
		}
	}

	if(!array_key_exists($controller, $supported_controller) || !in_array($action,$supported_controller[$controller]))
	{
		$controller = 'home';
		$action = 'error';
	}
	include_once("controllers/".$controller."_controller.php");
	$className = ucfirst($controller)."Controller";

	$obj = new $className();
	$obj->$action();
?>