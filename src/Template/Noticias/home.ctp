<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
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
							<li><a href="/noticias/home">Home</a></li>
							<li><a href="/times/home">Times</a></li>
                                                        <li><a href="/campeonatos/home">Campeonatos</a></li>
							<li><a href="/pages/sobre">Sobre nós</a></li>
							<li><a href="/mensagens/add">Contate-nos</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                          <li data-target="#myCarousel" data-slide-to="1"></li>
                                          <li data-target="#myCarousel" data-slide-to="2"></li>
                                          <li data-target="#myCarousel" data-slide-to="3"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <!--<div class="carousel-inner" role="listbox">
                                          <div class="item active">
                                              <img src="img/slides/at.jpg" alt="Chania" width="460" height="345">
                                          </div>

                                          <div class="item">
                                            <img src="img/slides/download.jpg" alt="Chania" width="460" height="345">
                                          </div>

                                          <div class="item">
                                            <img src="img/slides/vasco.jpg" alt="Flower" width="460" height="345">
                                          </div>

                                          <div class="item">
                                            <img src="img/home-copy.jpg" alt="Flower" width="460" height="345">
                                            <label>Jogador se machuca em treino </label>
                                          </div>
                                        </div>
                                        -->
                                        <!-- Left and right controls -->
                                        <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>-->
					
					<div class="clearfix content">
						<!--<div class="content_title"><h3>Notícias</h3></div>-->
						<?php foreach($noticias as $noticia){ ?>
                                                
						<div class="clearfix single_content">
							<div class="clearfix post_date floatleft">
								<h3><?= $noticia['data_publicacao']; ?></h3>
							</div>
							<div class="clearfix post_detail">
                                                            <h2><a href="/noticias/completa/<?= $noticia['id']?>" > <?= $noticia['titulo']?> </a></h2>
								<div class="clearfix post_excerpt">
                                                                    <p><?= $noticia['conteudo']?></p>
                                                                </div>
							</div>
						</div>					
					</div>
                                                <?php } ?>
					
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