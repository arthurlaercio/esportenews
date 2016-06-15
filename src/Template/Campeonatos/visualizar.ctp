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
                                'Novo Campeonato',
                                ['controller' => 'Campeonatos', 'action' => 'adicionar', '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Editar Campeonato',
                                ['controller' => 'Campeonatos', 'action' => 'editar',$campeonato->id, '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Adicionar times no Campeonato',
                                ['controller' => 'Participantes', 'action' => 'add', '_full' => true]
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
                                'Excluir Campeonato',
                                ['controller' => 'Campeonatos', 'action' => 'delete',$campeonato->id, '_full' => true],
                                ['confirm' => __('Tem certeza que deseja deletar?', $campeonato->id)]
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
                         <h2>Campeonatos</h2>   
                        </div>
                    </div>              
                      <hr />
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="alert alert-info">
                                 <strong>Detalhes do campeonato </strong>
                            </div>                       
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="campeonatos view large-12 medium-10 columns content">
   
                                <table class="vertical-table">
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <td><?= $this->Number->format($campeonato->id) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Nome') ?></th>
                                        <td><?= h($campeonato->nome) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Tipo') ?></th>
                                        <td><?= h($campeonato->tipo) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Descricao') ?></th>
                                        <td><?= h($campeonato->descricao) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Imagem') ?></th>
                                        <td><?= h($campeonato->imagem) ?></td>
                                    </tr>                                 
                                </table>
                                <div class="related">
                                    <h4><?= __('Times participantes') ?></h4>
                                    <?php if (!empty($campeonato->participantes)): ?>
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <th><?= __('Id') ?></th>
                                            <th><?= __('Campeonato Id') ?></th>
                                            <th><?= __('Time Id') ?></th>
                                            <th class="actions"><?= __('Ações') ?></th>
                                        </tr>
                                        <?php foreach ($campeonato->participantes as $participantes): ?>
                                        <tr>
                                            <td><?= h($participantes->id) ?></td>
                                            <td><?= h($participantes->campeonato_id) ?></td>
                                            <td><?= h($participantes->time_id) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('Ver'), ['controller' => 'Participantes', 'action' => 'view', $participantes->id]) ?>
                                                <?= $this->Html->link(__('Editar'), ['controller' => 'Participantes', 'action' => 'edit', $participantes->id]) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Participantes', 'action' => 'delete', $participantes->id], ['confirm' => __('Tem certeza que deseja deletar? # {0}?', $participantes->id)]) ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <?php endif; ?>
                                </div>
                                <div class="related">
                                    <h4><?= __('Notícias relacionadas') ?></h4>
                                    <?php if (!empty($campeonato->tags)): ?>
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <th><?= __('Id') ?></th>
                                            <th><?= __('Time Id') ?></th>
                                            <th><?= __('Campeonato Id') ?></th>
                                            <th class="actions"><?= __('Ações') ?></th>
                                        </tr>
                                        <?php foreach ($campeonato->tags as $tags): ?>
                                        <tr>
                                            <td><?= h($tags->id) ?></td>
                                            <td><?= h($tags->time_id) ?></td>
                                            <td><?= h($tags->campeonato_id) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('Ver'), ['controller' => 'Tags', 'action' => 'visualizar', $tags->id]) ?>
                                                <?= $this->Html->link(__('Editar'), ['controller' => 'Tags', 'action' => 'editar', $tags->id]) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Tem certeza que deseja deletar? # {0}?', $tags->id)]) ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <?php endif; ?>
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
