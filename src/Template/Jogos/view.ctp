<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jogo'), ['action' => 'edit', $jogo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jogo'), ['action' => 'delete', $jogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jogo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jogos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jogo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jogos view large-9 medium-8 columns content">
    <h3><?= h($jogo->id) ?></h3>
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
            <th><?= __('Time Casa Id') ?></th>
            <td><?= $this->Number->format($jogo->time_casa_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Time Fora Id') ?></th>
            <td><?= $this->Number->format($jogo->time_fora_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Gol Time Casa') ?></th>
            <td><?= $this->Number->format($jogo->gol_time_casa) ?></td>
        </tr>
        <tr>
            <th><?= __('Gol Time Fora') ?></th>
            <td><?= $this->Number->format($jogo->gol_time_fora) ?></td>
        </tr>
    </table>
</div>
