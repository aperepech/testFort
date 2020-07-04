<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Index;
	
	class AddController extends Controller
	{
		public function show() //добавление данных в таблицу
		{
            $this->title = 'Добавление комплектации';
            $message = '';
            $color = '';
            $active = '';

            if ($_SERVER['REQUEST_URI']=='/add/') {     // делаем выделение меню
                   $active = 'active';
               }
              

            if (isset($_POST['assembly']) and   // получаем данные из формы для добавления
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

                if ($price < 1000000) {         //валидация стоимости
                    $message = 'Стоимость автомобиля должна быть больше 1000000 рублей';
                    $color = 'has-error';
                }elseif($price >3000000){
                    $message = 'Стоимость автомобиля должна быть меньше 3000000 рублей';
                    $color = 'has-error';
                }else{

            	(new Index)->setAll($assembly,$engine_size,$engine_power,$petrol,$drive,$gearbox,$price); //запись строкт в БД
                  $message = 'Комплектация успешно добавленна';
                  $color = 'has-success';
                  }
                 
               }
            
               return $this->render('index/add',['message'=>$message,'color'=>$color,'active'=>$active]);
			
		}

	}
