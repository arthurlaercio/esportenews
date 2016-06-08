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
                                'Dashboard Noticias',
                                ['controller' => 'Noticias', 'action' => 'dashboardNoticia', '_full' => true]
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
                                'Nova Noticia',
                                ['controller' => 'Noticias', 'action' => 'adicionar', '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Editar Noticia',
                                ['controller' => 'Noticias', 'action' => 'editar',$noticia->id, '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Excluir Noticia',
                                ['controller' => 'Noticias', 'action' => 'delete',$noticia->id, '_full' => true],
                                ['confirm' => __('Tem certeza que deseja deletar?', $noticia->id)]
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
                         <h2>Noticias</h2>   
                        </div>
                    </div>              
                      <hr />
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="alert alert-info">
                                 <strong>Detalhes da Noticia </strong>
                            </div>                       
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="noticias view large-12 medium-10 columns content">
                                <h3><?= h($noticia->id) ?></h3>
                                <table class="vertical-table">
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <td><?= $this->Number->format($noticia->id) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Titulo') ?></th>
                                        <td><?= h($noticia->titulo) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Time') ?></th>
                                        <td><?= $noticia->has('time') ? $this->Html->link($noticia->time->id, ['controller' => 'Times', 'action' => 'view', $noticia->time->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Campeonato') ?></th>
                                        <td><?= $noticia->has('campeonato') ? $this->Html->link($noticia->campeonato->id, ['controller' => 'Campeonatos', 'action' => 'visualizar', $noticia->campeonato->id]) : '' ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th><?= __('Ativa') ?></th>
                                        <td><?= $this->Number->format($noticia->ativa) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Data Publicacao') ?></th>
                                        <td><?= h($noticia->data_publicacao) ?></td>
                                    </tr>
                                </table>
                                <div class="row">
                                    <h4><?= __('Conteudo') ?></h4>
                                    <?= $this->Text->autoParagraph(h($noticia->conteudo)); ?>
                                </div>
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
