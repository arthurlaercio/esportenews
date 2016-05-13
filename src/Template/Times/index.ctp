<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Time'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="times index large-9 medium-8 columns content">
    <h3><?= __('Times') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th><?= $this->Paginator->sort('pais') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('nome_estadio') ?></th>
                <th><?= $this->Paginator->sort('imagem') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($times as $time): ?>
            <tr>
                <td><?= $this->Number->format($time->id) ?></td>
                <td><?= h($time->nome) ?></td>
                <td><?= h($time->estado) ?></td>
                <td><?= h($time->pais) ?></td>
                <td><?= h($time->titulo) ?></td>
                <td><?= h($time->descricao) ?></td>
                <td><?= h($time->nome_estadio) ?></td>
                <td><?= h($time->imagem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $time->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $time->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $time->id], ['confirm' => __('Are you sure you want to delete # {0}?', $time->id)]) ?>
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
