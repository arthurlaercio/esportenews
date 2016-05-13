<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Time'), ['action' => 'edit', $time->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Time'), ['action' => 'delete', $time->id], ['confirm' => __('Are you sure you want to delete # {0}?', $time->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Times'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="times view large-9 medium-8 columns content">
    <h3><?= h($time->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($time->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($time->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Pais') ?></th>
            <td><?= h($time->pais) ?></td>
        </tr>
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($time->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($time->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome Estadio') ?></th>
            <td><?= h($time->nome_estadio) ?></td>
        </tr>
        <tr>
            <th><?= __('Imagem') ?></th>
            <td><?= h($time->imagem) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($time->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Participantes') ?></h4>
        <?php if (!empty($time->participantes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Campeonato Id') ?></th>
                <th><?= __('Time Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($time->participantes as $participantes): ?>
            <tr>
                <td><?= h($participantes->id) ?></td>
                <td><?= h($participantes->campeonato_id) ?></td>
                <td><?= h($participantes->time_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Participantes', 'action' => 'view', $participantes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Participantes', 'action' => 'edit', $participantes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Participantes', 'action' => 'delete', $participantes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participantes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($time->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Time Id') ?></th>
                <th><?= __('Campeonato Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($time->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->time_id) ?></td>
                <td><?= h($tags->campeonato_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
