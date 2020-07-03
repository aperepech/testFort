<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">
							<form method="POST" role="form">
							    <div class="form-group">
							    	<?php 
							    	if(isset($_POST['submit']))
							    	print '<div class="form-group has-success">
									<input class="form-control" placeholder="Комплектация успешно добавленна">
								    </div>';?>
									<label>комплектация</label>
									<select  name = "assembly" class="form-control">
										<option>Comfort</option>
										<option>Luxe</option>
										<option>Prestige</option>
										<option>Premium</option>
									</select><br>
									<label>Обьем двигателя</label>
									<select  name = "engine_size" class="form-control">
										<option>2</option>
										<option>3</option>
									</select><br>
									<label>Мощность двигателя</label>
									<select  name = "engine_power" class="form-control">
										<option>128</option>
										<option>140</option>
									</select><br>
									<label>Вид топлива</label>
									<select  name = "petrol" class="form-control">
										<option>Бензин</option>
										<option>Дизель</option>
									</select><br>
									<label>Привод</label>
									<select  name = "drive" class="form-control">
										<option>Передний</option>
										<option>Задний</option>
									</select><br>
									<label>Коробка</label>
									<select  name = "gearbox" class="form-control">
										<option>A/T</option>
										<option>M/T</option>
										<option>R/T</option>
									</select><br>
									<label>Цена</label>
									<input name="price" required class="form-control" value=""><br>
								    <input name = "submit" type="submit" class="btn btn-primary">
                         </div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->