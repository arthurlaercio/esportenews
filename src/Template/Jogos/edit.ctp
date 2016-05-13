<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jogo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jogo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jogos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jogos form large-9 medium-8 columns content">
    <?= $this->Form->create($jogo) ?>
    <fieldset>
        <legend><?= __('Edit Jogo') ?></legend>
        <?php
            echo $this->Form->input('rodada');
            echo $this->Form->input('time_casa_id');
            echo $this->Form->input('time_fora_id');
            echo $this->Form->input('gol_time_casa');
            echo $this->Form->input('gol_time_fora');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
