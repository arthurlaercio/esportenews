<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jogo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jogos index large-9 medium-8 columns content">
    <h3><?= __('Jogos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('rodada') ?></th>
                <th><?= $this->Paginator->sort('time_casa_id') ?></th>
                <th><?= $this->Paginator->sort('time_fora_id') ?></th>
                <th><?= $this->Paginator->sort('gol_time_casa') ?></th>
                <th><?= $this->Paginator->sort('gol_time_fora') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jogos as $jogo): ?>
            <tr>
                <td><?= $this->Number->format($jogo->id) ?></td>
                <td><?= $this->Number->format($jogo->rodada) ?></td>
                <td><?= $this->Number->format($jogo->time_casa_id) ?></td>
                <td><?= $this->Number->format($jogo->time_fora_id) ?></td>
                <td><?= $this->Number->format($jogo->gol_time_casa) ?></td>
                <td><?= $this->Number->format($jogo->gol_time_fora) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jogo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jogo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jogo->id)]) ?>
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
