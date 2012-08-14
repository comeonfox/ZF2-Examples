<?php 
include 'bootstrap.php';

$event = new \Event\Event;
$event->getEventManager()->attach('bar', function($e){
	$event = $e->getName();
	$target = get_class($e->getTarget());
	$params = json_encode($e->getParams());

	printf(
	'%s called on %s, using params %s'. PHP_EOL,
	$event,
	$target,
	$params
	);
});

$event->bar('baz','bat');
