<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Index;
	
	class ChangeController extends Controller
	{
		public function show($params) 
		{

			$this->title = 'Редактирование комплектации KIA CEED';  // устанавливаем title страницы
            $id = $params['id'];             // получаем id для редакетирования
			$list = (new Index) -> getById($id); 

            if (isset($_POST['submit'])) {           //получаем данные из формы для редактирования
            	$assembly = $_POST['assembly'];
            	$engine_size = $_POST['engine_size'];
            	$engine_power = $_POST['engine_power'];
            	$petrol = $_POST['petrol'];
            	$drive = $_POST['drive'];
            	$gearbox = $_POST['gearbox'];
            	$price = $_POST['price'];


            	(new Index)->upDateByIdd($id,$assembly,$engine_size,$engine_power,$petrol,$drive,$gearbox,$price); //запись изменений в БД
               }
            return $this->render('index/change', [
				'list' => $list,
				'title' => $this->title
				
			]);
			
		}
	}
