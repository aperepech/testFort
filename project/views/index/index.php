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