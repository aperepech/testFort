<?php
	use \Core\Route;
	
	return [
		new Route('/index/', 'index', 'show'), //показываем список
		new Route('/index/:id', 'index', 'dell'),//удаляем строку
		new Route('/add/', 'add', 'show'),//добавляем строку
		new Route('/change/:id', 'change', 'show'),//редактируем строку
	];
	
