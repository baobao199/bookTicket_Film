<?php 
	require_once("config.php");
	require_once("function.php");

	$supported_controller = array(
		'home' => array('index','error'),
		'movieplaying' => array('index','detail'),
		'outstanding' => array('detail'),
		'moviecomingsoon' => array('index','detail'),
		'promotion' => array('detail'),
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
		$controller = 'home';
		$action = 'index';
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