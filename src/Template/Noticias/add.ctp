<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="noticias form large-9 medium-8 columns content">
    <?= $this->Form->create($noticia) ?>
    <fieldset>
        <legend><?= __('Add Noticia') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('conteudo');
            echo $this->Form->input('tag_time_id');
            echo $this->Form->input('tag_campeonato_id');
            echo $this->Form->input('data_publicacao');
            echo $this->Form->input('imagem');
            echo $this->Form->input('ativa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
