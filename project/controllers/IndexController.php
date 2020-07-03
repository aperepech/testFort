<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Index;
	
	class IndexController extends Controller
	{
		public function show() 
		{

			$this->title = 'Комплектация KIA CEED';

			$page = new Index;
			$allList = $page->getAll();
			

			return $this->render('index/index', [
				'allList' => $allList,
				'title' => $this->title
			]);
			
		}

		public function dell($params)
		{   
			$this->title = 'Комплектация KIA CEED';
			$id = $params['id'];
            
			$page = new Index;
            $page->dell($id);
            $allList = $page->getAll();
            

            return $this->render('index/index', [
				'allList' => $allList,
				'title' => $this->title]);
			
		}
	}
