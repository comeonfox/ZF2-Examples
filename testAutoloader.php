<?php
	include 'bootstrap.php';
	$event = new Zend\EventManager\Event;
	$bar = new \Bar\bar;
	$bar->setFoo();
	$bar->setEventManager($event);
