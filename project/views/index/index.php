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
			<li class="active"><a href="/index/"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Список автомобилей</a></li>
			<li class=""><a href="/add/"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Добавить комплектацию</a></li>
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
				<h1 class="page-header">Список комплектаций</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					      <thead>
						    <tr>
						        <th >Комплектация</th>
						        <th >Обьем двигателя</th>
						        <th >Мощность двигателя</th>
						        <th >Вид топлива</th>
						        <th >Привод</th>
						        <th >Коробка</th>
						        <th >Цена</th>
						        <th >Удалить</th>
						        <th >Редактировать</th>
						    </tr>
						  </thead>
						  <tbody>
						        <?php foreach ($allList as $list):?>
                                    <tr>
			                            <td><?=$list['assembly'];?></td>
			                            <td><?=$list['engine_size'];?></td>
			                            <td><?=$list['engine_power'];?></td>
			                            <td><?=$list['petrol'];?></td>
			                            <td><?=$list['drive'];?></td>
			                            <td><?=$list['gearbox'];?></td>
			                            <td><?=$list['price'];?></td>
                                        <td><a class="btn btn-danger" href="<?=$list['id']; ?>">Удалить</a></td>
                                        <td><a class="btn btn-success" href="/change/<?=$list['id']; ?>">Редактировать</a></td>	
		                            </tr>
		                        <?php endforeach; ?>
		                   </tbody>    
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->