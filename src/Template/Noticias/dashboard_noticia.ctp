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
                  <a href="/usuarios/login" style="color:#fff;">LOGOUT</a>  

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
                                'HomePage',
                                ['controller' => 'Pages', 'action' => 'home', '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Nova notícia',
                                ['controller' => 'Noticias', 'action' => 'adicionar', '_full' => true]
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
                                 <strong>Lista de notícias </strong>
                            </div>                       
                        </div>
                    </div>                
                    <div class="noticias index large-12 medium-10 columns content">
                        
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('titulo') ?></th>
                                    <th><?= $this->Paginator->sort('time_id') ?></th>
                                    <th><?= $this->Paginator->sort('campeonato_id') ?></th>
                                    <th><?= $this->Paginator->sort('data_publicacao') ?></th>
                                    <th><?= $this->Paginator->sort('ativa') ?></th>
                                    <th class="actions"><?= __('Ações') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($noticias as $noticia): ?>
                                <tr>
                                    <td><?= $this->Number->format($noticia->id) ?></td>
                                    <td><?= h($noticia->titulo) ?></td>
                                    <td><?= $noticia->has('time') ? $this->Html->link($noticia->time->id, ['controller' => 'Times', 'action' => 'view', $noticia->time->id]) : '' ?></td>
                                    <td><?= $noticia->has('campeonato') ? $this->Html->link($noticia->campeonato->id, ['controller' => 'Campeonatos', 'action' => 'visualizar', $noticia->campeonato->id]) : '' ?></td>
                                    <td><?= h($noticia->data_publicacao) ?></td>
                                    <td><?= $this->Number->format($noticia->ativa) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Ver'), ['action' => 'visualizar', $noticia->id]) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'editar', $noticia->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $noticia->id], ['confirm' => __('Tem certeza que deseja alterar? # {0}?', $noticia->id)]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="paginator">
                            <ul class="pagination">
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                            </ul>
                            <p><?= $this->Paginator->counter() ?></p>
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
