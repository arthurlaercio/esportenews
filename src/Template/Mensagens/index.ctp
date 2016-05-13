<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mensagen'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mensagens index large-9 medium-8 columns content">
    <h3><?= __('Mensagens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mensagens as $mensagen): ?>
            <tr>
                <td><?= $this->Number->format($mensagen->id) ?></td>
                <td><?= h($mensagen->nome) ?></td>
                <td><?= h($mensagen->descricao) ?></td>
                <td><?= h($mensagen->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mensagen->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mensagen->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mensagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mensagen->id)]) ?>
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
