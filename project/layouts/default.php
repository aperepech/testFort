<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$title?></title>

<link href="../project/webroot/css/bootstrap.min.css" rel="stylesheet">
<link href="../project/webroot/css/datepicker3.css" rel="stylesheet">
<link href="../project/webroot/css/bootstrap-table.css" rel="stylesheet">
<link href="../project/webroot/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="../project/webroot/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

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
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
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
			<li><a href="/add/"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Добавить комплектацию</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<?=$content?>

	<script src="../project/webroot/js/jquery-1.11.1.min.js"></script>
	<script src="../project/webroot/js/bootstrap.min.js"></script>
	<script src="../project/webroot/js/chart.min.js"></script>
	<script src="../project/webroot/js/chart-data.js"></script>
	<script src="../project/webroot/js/easypiechart.js"></script>
	<script src="../project/webroot/js/easypiechart-data.js"></script>
	<script src="../project/webroot/js/bootstrap-datepicker.js"></script>
	<script src="../project/webroot/js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>