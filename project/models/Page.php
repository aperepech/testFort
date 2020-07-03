<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Index extends Model
	{
				
		public function getAll() // получаем все записи из таблицы
		{
			return $this->findMany("SELECT * FROM kia_ceed");
		}
	}
