<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mensagen->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mensagen->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mensagens'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mensagens form large-9 medium-8 columns content">
    <?= $this->Form->create($mensagen) ?>
    <fieldset>
        <legend><?= __('Edit Mensagen') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('descricao');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
