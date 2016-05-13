<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mensagen'), ['action' => 'edit', $mensagen->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mensagen'), ['action' => 'delete', $mensagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mensagen->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mensagens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mensagen'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mensagens view large-9 medium-8 columns content">
    <h3><?= h($mensagen->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($mensagen->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($mensagen->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($mensagen->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($mensagen->id) ?></td>
        </tr>
    </table>
</div>
