<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title_for_layout; ?> - CharSheet Manager</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->script(array('jquery-2.1.0.min', 'bootstrap.min'));
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topnav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= $this->Html->url('/') ?>">CharSheet Manager</a>
			</div>
			<div class="collapse navbar-collapse" id="topnav">
				<ul class="nav navbar-nav">
					
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div id="header">
			<h1></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" class="clearfix text-center">
			<small class="text-muted">Copyright &copy; 2014 Ryan Schmidt</small>
		</div>
	</div>
</body>
</html>
