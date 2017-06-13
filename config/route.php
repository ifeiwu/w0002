<?php
return array(

	'/' => array(
		'method' => 'GET',
		'controller' => 'Home',
		'action' => 'index'
	),
	
	'/work/(\d+)?' => array(
		'method' => 'GET',
		'controller' => 'Home',
		'action' => 'work'
	),
	
	'/events' => array(
		'method' => 'GET',
		'controller' => 'Home',
		'action' => 'events'
	),
	
	'/event/(\d+)?' => array(
		'method' => 'GET',
		'controller' => 'Home',
		'action' => 'event'
	),
	
	// 流量统计
	'/stats' => array(
		'method' => 'POST',
		'controller' => 'Stats',
		'action' => 'index'
	),
	
);
