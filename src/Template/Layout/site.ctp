<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Urbanic Template</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <?php
        	echo $this->Html->css([
        		'bootstrap',
        		'templatemo_style',
        		'js/colorbox/colorbox'
        	])
        ?>
    </head>
    
    <body>

        <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            <?php
                            	echo $this->Html->image('/img/phone.png', ['alt'=>'phone']);
                            ?>
                            010-020-0340
                    </div>
                    <div id="email" class="pull-right">
                            <?php
                            	echo $this->Html->image('/img/email.png', ['alt'=>'email']);
                            ?>
                            contact@website.com
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <?php 
                                	$img = $this->Html->image(
                                		'templatemo_logo.png',
                                		[
                                			'alt' => 'Urbanic template',
                                			'title' => 'Urbanic template'
                                		]
                                	);
                                	echo $this->Html->link($img, '/', ['class' => 'navbar-brand', 'escape' => false]);
                                ?>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                            	<?php foreach ($paginas as $v) : ?>
                                	<li>
                                		<?php echo $this->Html->link(strtoupper($v->titulo), '/'.$v->url); ?>
                                	</li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                            	<?php foreach ($categorias as $v) : ?>
                                	<li>
                                		<?php echo $this->Html->link(strtoupper($v->titulo), '/categoria/'.$v->url); ?>
                                	</li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div>
            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>WELCOME TO URBANIC</h1>
                                <p>CHOOSE THE ONE SUITABLE FOR YOU</p>
                                <p><a class="btn btn-lg btn-green" href="#" role="button" style="margin: 20px;">View Demo</a> 
                                	<a class="btn btn-lg btn-orange" href="#" role="button">Free Download</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#templatemo-carousel -->
        </div>

        <div class="templatemo-welcome" id="templatemo-welcome">
            <?php echo $this->fetch('content'); ?>
        </div>

        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                    <a href="#">
                                        <span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-rss"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                       		Copyright © 2084 <a href="#">Your Company Name</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <?php
        /*	echo $this->Html->script([
        		'jquery.min',
        		'bootstrap.min',
        		'stickUp.min',
        		'colorbox/jquery.colorbox-min',
        		'templatemo_script'
        	]);*/
        ?>

    </body>
</html>