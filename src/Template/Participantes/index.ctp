<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campeonatos'), ['controller' => 'Campeonatos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campeonato'), ['controller' => 'Campeonatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Times'), ['controller' => 'Times', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Time'), ['controller' => 'Times', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="participantes index large-9 medium-8 columns content">
    <h3><?= __('Participantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('campeonato_id') ?></th>
                <th><?= $this->Paginator->sort('time_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participantes as $participante): ?>
            <tr>
                <td><?= $this->Number->format($participante->id) ?></td>
                <td><?= $participante->has('campeonato') ? $this->Html->link($participante->campeonato->id, ['controller' => 'Campeonatos', 'action' => 'view', $participante->campeonato->id]) : '' ?></td>
                <td><?= $participante->has('time') ? $this->Html->link($participante->time->id, ['controller' => 'Times', 'action' => 'view', $participante->time->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $participante->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $participante->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $participante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participante->id)]) ?>
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
