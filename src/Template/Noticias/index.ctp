<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Noticia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="noticias index large-9 medium-8 columns content">
    <h3><?= __('Noticias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('tag_time_id') ?></th>
                <th><?= $this->Paginator->sort('tag_campeonato_id') ?></th>
                <th><?= $this->Paginator->sort('data_publicacao') ?></th>
                <th><?= $this->Paginator->sort('ativa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($noticias as $noticia): ?>
            <tr>
                <td><?= $this->Number->format($noticia->id) ?></td>
                <td><?= h($noticia->titulo) ?></td>
                <td><?= $this->Number->format($noticia->tag_time_id) ?></td>
                <td><?= $this->Number->format($noticia->tag_campeonato_id) ?></td>
                <td><?= h($noticia->data_publicacao) ?></td>
                <td><?= $this->Number->format($noticia->ativa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $noticia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $noticia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $noticia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]) ?>
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
