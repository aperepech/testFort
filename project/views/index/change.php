<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>KIA</span>CEED</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
			</div>
		</form>
		<ul class="nav menu">
			<li class=""><a href="/index/"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Список автомобилей</a></li>
			<li class="<?=$active?>"><a href="/add/"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Добавить комплектацию</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->
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
									<input class="form-control" placeholder="Комплектация успешно изменнена">
								    </div>';?>
									<label>комплектация</label>
									<select name = "assembly" class="form-control" required>
										<option value="" selected disabled hidden><?=$list['assembly']?></option>
										<option>Comfort</option>
										<option>Luxe</option>
										<option>Prestige</option>
										<option>Premium</option>
									</select><br>
									<label>Обьем двигателя</label>
									<select  name = "engine_size" class="form-control" required>
										<option value="" selected disabled hidden><?=$list['engine_size']?></option>
										<option>2</option>
										<option>3</option>
									</select><br>
									<label>Мощность двигателя</label>
									<select  name = "engine_power" class="form-control" required>
										<option value="" selected disabled hidden><?=$list['engine_power']?></option>
										<option>128</option>
										<option>140</option>
									</select><br>
									<label>Вид топлива</label>
									<select  name = "petrol" class="form-control" required>
										<option value="" selected disabled hidden><?=$list['petrol']?></option>
										<option>Бензин</option>
										<option>Дизель</option>
									</select><br>
									<label>Привод</label>
									<select  name = "drive" class="form-control" required>
										<option value="" selected disabled hidden><?=$list['drive']?></option>
										<option>Передний</option>
										<option>Задний</option>
									</select><br>
									<label>Коробка</label>
									<select  name = "gearbox" class="form-control" required>
										<option value="" selected disabled hidden><?=$list['gearbox']?></option>
										<option>A/T</option>
										<option>M/T</option>
										<option>R/T</option>
									</select><br>
									<label>Цена</label>
									<input name="price" required class="form-control" value="<?=$list['price']?>"><br>
								    <input name = "submit" type="submit" class="btn btn-primary">
								    
                         </div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

