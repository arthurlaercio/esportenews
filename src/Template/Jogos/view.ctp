<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/pages/dashboard">
                        <img src="/img/esporte1.jpg" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li >
                        <?php echo $this->Html->link(
                                'Dashboard',
                                ['controller' => 'Pages', 'action' => 'dashboard', '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Dashboard Campeonatos',
                                ['controller' => 'Campeonatos', 'action' => 'dashboardCampeonato', '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'HomePage',
                                ['controller' => 'Pages', 'action' => 'home', '_full' => true]
                            );
                        ?>
                    </li>
                    
                    <li >
                        <?php echo $this->Html->link(
                                'Adicionar jogos ao Campeonato',
                                ['controller' => 'Jogos', 'action' => 'add', '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Visualizar jogos do Campeonato',
                                ['controller' => 'Jogos', 'action' => 'index', '_full' => true]
                            );
                        ?>
                    </li>
                    
                    <li >
                        <?php echo $this->Html->link(
                                'Sobre nós',
                                ['controller' => 'Pages', 'action' => '', '_full' => true]
                            );
                        ?>
                    </li>             
                </ul>
            </div>

        </nav>

<div id="page-wrapper" >
            <div id="page-inner">
                    <div class="row">
                        <div class="col-lg-12">
                         <h2>Jogos</h2>   
                        </div>
                    </div>              
                      <hr />
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="alert alert-info">
                                 <strong>Detalhes do jogo </strong>
                            </div>                       
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="jogos view large-9 medium-8 columns content">
                                
                                <table class="vertical-table">
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <td><?= $this->Number->format($jogo->id) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Rodada') ?></th>
                                        <td><?= $this->Number->format($jogo->rodada) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Casa') ?></th>
                                        <td><?= $this->Number->format($jogo->casa) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Fora') ?></th>
                                        <td><?= $this->Number->format($jogo->fora) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Golcasa') ?></th>
                                        <td><?= $this->Number->format($jogo->golcasa) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Golfora') ?></th>
                                        <td><?= $this->Number->format($jogo->golfora) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    </div>
    <div class="footer">
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2016 FPIN | By: <a href="http://lattes.cnpq.br/9226581926261816" style="color:#fff;" target="_blank">Arthur Laercio</a>
                </div>
            </div>
    </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/js/custom.js"></script>
    
   
</body>
</html>
