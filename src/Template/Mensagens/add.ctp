<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mensagens'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mensagens form large-9 medium-8 columns content">
    <?= $this->Form->create($mensagen) ?>
    <fieldset>
        <legend><?= __('Add Mensagen') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('descricao');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
