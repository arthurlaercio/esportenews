<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Noticia'), ['action' => 'edit', $noticia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Noticia'), ['action' => 'delete', $noticia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Noticias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="noticias view large-9 medium-8 columns content">
    <h3><?= h($noticia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($noticia->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($noticia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Tag Time Id') ?></th>
            <td><?= $this->Number->format($noticia->tag_time_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Tag Campeonato Id') ?></th>
            <td><?= $this->Number->format($noticia->tag_campeonato_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativa') ?></th>
            <td><?= $this->Number->format($noticia->ativa) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Publicacao') ?></th>
            <td><?= h($noticia->data_publicacao) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Conteudo') ?></h4>
        <?= $this->Text->autoParagraph(h($noticia->conteudo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Imagem') ?></h4>
        <?= $this->Text->autoParagraph(h($noticia->imagem)); ?>
    </div>
</div>
