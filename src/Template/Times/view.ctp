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
                                'Dashboard Times',
                                ['controller' => 'Times', 'action' => 'dashboardTime', '_full' => true]
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
                                'Novo time',
                                ['controller' => 'Times', 'action' => 'add', '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Editar time',
                                ['controller' => 'Times', 'action' => 'edit',$time->id, '_full' => true]
                            );
                        ?>
                    </li>
                    <li >
                        <?php echo $this->Html->link(
                                'Excluir time',
                                ['controller' => 'Times', 'action' => 'delete',$time->id, '_full' => true],
                                ['confirm' => __('Tem certeza que deseja deletar?', $time->id)]
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
                         <h2>Usuários</h2>   
                        </div>
                    </div>              
                      <hr />
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="alert alert-info">
                                 <strong>Detalhes do usuário </strong>
                            </div>                       
                        </div>
                    </div> 
                    <div class="times view large-9 medium-8 columns content">
                        <h3><?= h($time->id) ?></h3>
                        <table class="vertical-table">
                            <tr>
                                <th><?= __('Nome') ?></th>
                                <td><?= h($time->nome) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Estado') ?></th>
                                <td><?= h($time->estado) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Pais') ?></th>
                                <td><?= h($time->pais) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Titulo') ?></th>
                                <td><?= h($time->titulo) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Descricao') ?></th>
                                <td><?= h($time->descricao) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Nome Estadio') ?></th>
                                <td><?= h($time->nome_estadio) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Imagem') ?></th>
                                <td><?= h($time->imagem) ?></td>
                            </tr>
                        </table>
                        <div class="related">
                            <h4><?= __('Campeonatos que participa') ?></h4>
                            <?php if (!empty($time->participantes)): ?>
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Campeonato Id') ?></th>
                                    <th><?= __('Time Id') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                                <?php foreach ($time->participantes as $participantes): ?>
                                <tr>
                                    <td><?= h($participantes->id) ?></td>
                                    <td><?= h($participantes->campeonato_id) ?></td>
                                    <td><?= h($participantes->time_id) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Participantes', 'action' => 'view', $participantes->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Participantes', 'action' => 'edit', $participantes->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Participantes', 'action' => 'delete', $participantes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participantes->id)]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php endif; ?>
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
