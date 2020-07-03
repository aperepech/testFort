<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Index;
	
	class AddController extends Controller
	{
		public function show() //добавление данных в таблицу
		{
            $this->title = 'Добавление комплектации';
            

            if (isset($_POST['assembly']) and
            	isset($_POST['engine_size']) and
            	isset($_POST['engine_power']) and
            	isset($_POST['petrol']) and
            	isset($_POST['drive']) and
            	isset($_POST['gearbox']) and
            	isset($_POST['price'])

        ) {
            	$assembly = $_POST['assembly'];
            	$engine_size = $_POST['engine_size'];
            	$engine_power = $_POST['engine_power'];
            	$petrol = $_POST['petrol'];
            	$drive = $_POST['drive'];
            	$gearbox = $_POST['gearbox'];
            	$price = $_POST['price'];

            	(new Index)->setAll($assembly,$engine_size,$engine_power,$petrol,$drive,$gearbox,$price);
               }
            

           

			return $this->render('index/add');
			
		}

	}
