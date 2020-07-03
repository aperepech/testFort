<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Index extends Model
	{
	    public function getById($id) // получаем запись по id
		{
			return $this->findOne("SELECT * FROM kia_ceed WHERE id=$id");
		}

		public function getAll() // получаем все записи из таблицы
		{
			return $this->findMany("SELECT * FROM kia_ceed");
		}

		public function dell($id = null) //удаляем запись по id
		{
		    return $this->setMore("DELETE FROM kia_ceed WHERE id=$id");
		}

		public function setAll($assembly,$engine_size,$engine_power,$petrol,$drive,$gearbox,$price) // добавляем нлвую запись в таблицу
		{
		    return $this->setMore("INSERT INTO kia_ceed SET assembly='$assembly', engine_size=$engine_size, engine_power=$engine_power,petrol='$petrol',drive='$drive',gearbox='$gearbox',price=$price");
		}
		
		public function upDateByIdd($id,$assembly,$engine_size,$engine_power,$petrol,$drive,$gearbox,$price) // обновляем запись по id
		{
			return $this->setMore("UPDATE kia_ceed SET  assembly='$assembly', engine_size=$engine_size, engine_power=$engine_power,petrol='$petrol',drive='$drive',gearbox='$gearbox',price=$price WHERE id=$id");
		}
	}
