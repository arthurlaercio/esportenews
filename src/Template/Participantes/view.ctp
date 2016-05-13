<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Participante'), ['action' => 'edit', $participante->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Participante'), ['action' => 'delete', $participante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participante->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campeonatos'), ['controller' => 'Campeonatos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campeonato'), ['controller' => 'Campeonatos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Times'), ['controller' => 'Times', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time'), ['controller' => 'Times', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="participantes view large-9 medium-8 columns content">
    <h3><?= h($participante->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Campeonato') ?></th>
            <td><?= $participante->has('campeonato') ? $this->Html->link($participante->campeonato->id, ['controller' => 'Campeonatos', 'action' => 'view', $participante->campeonato->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Time') ?></th>
            <td><?= $participante->has('time') ? $this->Html->link($participante->time->id, ['controller' => 'Times', 'action' => 'view', $participante->time->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($participante->id) ?></td>
        </tr>
    </table>
</div>
