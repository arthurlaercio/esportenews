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

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <title>ESPORTE NEWS</title>
    <!--Oswald Font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'> -->
    
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
	
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href=""><h1><span>Yellow</span> Blog</h1></a>
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
							<li><a href="">Home</a></li>
							<li><a href="">Category</a></li>
							<li id="dropdown"><a href="">Drop Down</a>
								<ul>
									<li><a href="">Home</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">Category</a></li>
									<li><a href="">About us</a></li>
									<li><a href="">Contact us</a></li>
								</ul>
							</li>
							<li><a href="">Category</a></li>
							<li><a href="">Category</a></li>
							<li><a href="">Category</a></li>
							<li><a href="">Category</a></li>
							<li><a href="">Category</a></li>
							<li><a href="">Category</a></li>
							<li><a href="">About us</a></li>
							<li><a href="">Contact us</a></li>
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
                                        <div class="carousel-inner" role="listbox">
                                          <div class="item active">
                                              <img src="img/slides/megamind_07.jpg" alt="Chania" width="460" height="345">
                                          </div>

                                          <div class="item">
                                            <img src="img/slides/up-official-trailer-fake.jpg" alt="Chania" width="460" height="345">
                                          </div>

                                          <div class="item">
                                            <img src="img/slides/wall-e.jpg" alt="Flower" width="460" height="345">
                                          </div>

                                          <div class="item">
                                            <img src="img/home-copy.jpg" alt="Flower" width="460" height="345">
                                            <label>Jogador se machuca em treino </label>
                                          </div>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>
					
					<div class="clearfix content">
						<div class="content_title"><h2>Latest Blog Post</h2></div>
						
						<div class="clearfix single_content">
							<div class="clearfix post_date floatleft">
								<div class="date">
									<h3>27</h3>
									<p>January</p>
								</div>
							</div>
							<div class="clearfix post_detail">
								<h2><a href="">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </a></h2>
								<div class="clearfix post-meta">
									<p><span><i class="fa fa-user"></i> Admin</span> <span><i class="fa fa-clock-o"></i> 20 Jan 2014</span> <span><i class="fa fa-comment"></i> 4 comments</span> <span><i class="fa fa-folder"></i> Category</span></p>
								</div>
								<div class="clearfix post_excerpt">
									<img src="img/thumb.png" alt=""/>
									<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a 
									ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class 
									aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos </p>
								</div>
								<a href="">Continue Reading</a>
							</div>
						</div>
						
						<div class="clearfix single_content">
							<div class="clearfix post_date floatleft">
								<h3>27</h3>
								<p>January</p>
							</div>
							<div class="clearfix post_detail">
								<h2><a href="">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </a></h2>
								<div class="clearfix post-meta">
									<p><span>Admin</span> <span>20 Jan 2014</span> <span>4 comments</span> <span>Category</span></p>
								</div>
								<div class="clearfix post_excerpt">
									<img src="img/thumb.png" alt=""/>
									<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a 
									ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class 
									aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos </p>
								</div>
								<a href="">Continue Reading</a>
							</div>
						</div>
						
						<div class="clearfix single_content">
							<div class="clearfix post_date floatleft">
								<h3>27</h3>
								<p>January</p>
							</div>
							<div class="clearfix post_detail">
								<h2><a href="">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </a></h2>
								<div class="clearfix post-meta">
									<p><span>Admin</span> <span>20 Jan 2014</span> <span>4 comments</span> <span>Category</span></p>
								</div>
								<div class="clearfix post_excerpt">
									<img src="img/thumb.png" alt=""/>
									<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a 
									ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class 
									aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos </p>
								</div>
								<a href="">Continue Reading</a>
							</div>
						</div>						
					</div>
					
					<div class="pagination">
						<nav>
							<ul>
								<li><a href=""> << </a></li>
								<li><a href="">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href="">4</a></li>
								<li><a href=""> >> </a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="clearfix sidebar_container floatright">
				
					<div class="clearfix newsletter">
						<form>
							<h2>Signup for newsletter</h2>
							<input type="text" placeholder="Name" id="mce-TEXT"/>
							<input type="email" placeholder="Name" id="mce-EMAIL"/>
							<input type="submit" value="Submit" id="mc-embedded-subscribe"/>
						</form>
					</div>
					<div class="clearfix sidebar">
						<div class="clearfix single_sidebar">
							<div class="popular_post">
								<div class="sidebar_title"><h2>Most Popular</h2></div>
								<ul>
									<li><a href="">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </a></li>
									<li><a href="">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </a></li>
									<li><a href="">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </a></li>
									<li><a href="">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </a></li>
									<li><a href="">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </a></li>
								</ul>
							</div>
							</div>
						<div class="clearfix single_sidebar category_items">
							<h2>Categories</h2>
							<ul>
								<li class="cat-item"><a href="">Category Name</a>(12)</li>
								<li class="cat-item"><a href="">Category Name </a>(12)</li>
								<li class="cat-item"><a href="">Category Name</a>(12)</li>
								<li class="cat-item"><a href="">Category Name </a>(12)</li>
								<li class="cat-item"><a href="">Category Name </a>(12)</li>
							</ul>
						</div>
						<div class="clearfix single_sidebar">
							<h2>Recent Post</h2>
							<ul>
								<li><a href="">Category Name <span>(12)</span></a></li>
								<li><a href="">Category Name <span>(12)</span></a></li>
								<li><a href="">Category Name <span>(12)</span></a></li>
								<li><a href="">Category Name <span>(12)</span></a></li>
								<li><a href="">Category Name <span>(12)</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="footer_top_area">
			<div class="clearfix wrapper footer_top">
				<div class="clearfix footer_top_container">
					<div class="clearfix single_footer_top floatleft">
						<h2>From Twitter</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="">Lorem Ipsum has been the industry</a> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
					<div class="clearfix single_footer_top floatleft">
						<h2>Recent Post</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy <a href="">Lorem Ipsum has been the industry</a> text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
					<div class="clearfix single_footer_top floatleft">
						<h2>Usefull Links</h2>
						<ul>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section id="footer_bottom_area">
			<div class="clearfix wrapper footer_bottom">
				<div class="clearfix copyright floatleft">
					<p> Copyright &copy; All rights reserved by <span>Wpfreeware.com</span></p>
				</div>
				<div class="clearfix social floatright">
					<ul>
						<li><a class="tooltip" title="Facebook" href=""><i class="fa fa-facebook-square"></i></a></li>
						<li><a class="tooltip" title="Twitter" href=""><i class="fa fa-twitter-square"></i></a></li>
						<li><a class="tooltip" title="Google+" href=""><i class="fa fa-google-plus-square"></i></a></li>
						<li><a class="tooltip" title="LinkedIn" href=""><i class="fa fa-linkedin-square"></i></a></li>
						<li><a class="tooltip" title="tumblr" href=""><i class="fa fa-tumblr-square"></i></a></li>
						<li><a class="tooltip" title="Pinterest" href=""><i class="fa fa-pinterest-square"></i></a></li>
						<li><a class="tooltip" title="RSS Feed" href=""><i class="fa fa-rss-square"></i></a></li>
						<li><a class="tooltip" title="Sitemap" href=""><i class="fa fa-sitemap"></i> </a></li>
					</ul>
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