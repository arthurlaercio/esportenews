

<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>ESPORTE NEWS</title>
    <!--Oswald Font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'> 
    
    <?= $this->Html->css('tooltipster.css') ?>
    <!-- home slider-->
    <?= $this->Html->css('pgwslider.css') ?>
    
    <!-- Font Awesome -->
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    </style>
    
  </head>
  <body>
	<?php //pr($noticias);exit;?>
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href=""><h1><span>Esporte</span> News</h1></a>
					</div>
					<div class="clearfix search floatright">
						<form>
							<input type="text" placeholder="Search"/>
							<input type="submit" />
						</form>
					</div>
				</div>
				<div class="header_bottom">
					<nav>
						<ul id="nav">
							<li><a href="/">Home</a></li>
							<li><a href="/times/home">Times</a></li>
							<li><a href="/pages/sobre">Sobre nós</a></li>
							<li><a href="/mensagens">Contate-nos</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
                   
					<div class="clearfix content">
						
						<div class="clearfix single_content">
							<div class="clearfix post_date floatleft">
								
							</div>
							<div class="clearfix post_detail">
                                                            <div class="mensagens form large-9 medium-8 columns content">
                                                            <?= $this->Form->create($mensagen) ?>
                                                            <fieldset>
                                                                
                                                                <?php
                                                                    echo $this->Form->input('nome');
                                                                    echo $this->Form->input('descricao',array('type' => 'textArea'));
                                                                    echo $this->Form->input('email');
                                                                ?>
                                                            </fieldset>
                                                            <?= $this->Form->button('Salvar', ['type' => 'submit', 'class' => 'btn btn-success']);?>
                                                            <?= $this->Form->end() ?>
                                                        </div>
								<div class="clearfix post_excerpt">
                                                                  
                                                                </div>
							</div>
						</div>					
					</div>
                                              
					
				</div>
				<div class="clearfix sidebar_container floatright">
			
				</div>
			</div>
		</section>
		
		<section id="footer_bottom_area">
			<div class="clearfix wrapper footer_bottom">
				<div class="clearfix copyright floatleft">
					<p> Esportes News</p>
				</div>
				<div class="clearfix social floatright">
					
				</div>
			</div>
		</section>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>	
		<script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>		
		<script type="text/javascript">
			$(document).ready(function() {
				$('.tooltip').tooltipster();
			});
		</script>
		 <script type="text/javascript" src="js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
		</script>		
		<script src="js/pgwslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.pgwSlider').pgwSlider({
					
					intervalDuration: 5000
				
				});
			});
		</script>
		<script type="text/javascript" src="js/placeholder_support_IE.js"></script>		
    </body>
</html>