<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $time->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $time->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Times'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="times form large-9 medium-8 columns content">
    <?= $this->Form->create($time) ?>
    <fieldset>
        <legend><?= __('Edit Time') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('estado');
            echo $this->Form->input('pais');
            echo $this->Form->input('titulo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('nome_estadio');
            echo $this->Form->input('imagem');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
