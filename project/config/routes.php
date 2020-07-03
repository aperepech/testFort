<?php
	use \Core\Route;
	
	return [
		new Route('/index/', 'index', 'show'),
		new Route('/index/:id', 'index', 'dell'),
		new Route('/add/', 'add', 'show'),
		new Route('/change/:id', 'change', 'show'),
	];
	
