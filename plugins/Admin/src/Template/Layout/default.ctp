<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Administração em CakePHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container-fluid">
  				<div class="navbar-header">
      				<a class="navbar-brand" href="<?php echo $this->Url->build('/admin') ?>">CakePHP 3 Adm</a>
    			</div>	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav">
        				<li>
        					<?php
        						echo $this->Html->link('Paginas',
        						[
        							'prefix' => 'admin',
        							'controller' => 'paginas',
        							'action' => 'index'
        						]);
        					?>
        				</li>
        				<li>
        					<?php
        						echo $this->Html->link('Categorias',
        						[
        							'prefix' => 'admin',
        							'controller' => 'categorias',
        							'action' => 'index'
        						]);
        					?>
        				</li>
        				<li>
        					<?php
        						echo $this->Html->link('Usuários',
        						[
        							'prefix' => 'admin',
        							'controller' => 'users',
        							'action' => 'index'
        						]);
        					?>
        				</li>
        			</ul>
        			<ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $this->Url->build('/admin/users/login');?>">Entrar</a></li>
        				<li><a href="<?php echo $this->Url->build('/admin/users/logout');?>">Sair</a></li>
        			</ul>
    			</div>
    		</div>
    	</nav>
	</header>

	<main>
		<div class="container">
			<?php echo $this->fetch('content') ?>
		</div>
	</main>

	<footer>
		<center>
			<p><small>by Lucas Chegatti</small></p>
		</center>
	</footer>
    <?php echo $this->fetch('script'); ?>
</body>
</html>