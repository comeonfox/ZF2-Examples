<?php
	namespace bootstrap;
	$zend_path = '../zendframework2/library';
	require_once $zend_path . '/Zend/Loader/StandardAutoloader.php';

	$autoloader = new \Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));

	$config = include 'config.php';
	$autoloader->registerNamespaces($config['Autoloader']);
	spl_autoload_register(array($autoloader, 'autoload'));
