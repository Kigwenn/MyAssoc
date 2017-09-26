<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmsActor[]|\Cake\Collection\CollectionInterface $filmsActors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Films Actor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Films'), ['controller' => 'Films', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Films', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actors'), ['controller' => 'Actors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filmsActors index large-9 medium-8 columns content">
    <h3><?= __('Films Actors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('film_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actor_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($filmsActors as $filmsActor): ?>
            <tr>
                <td><?= $filmsActor->has('film') ? $this->Html->link($filmsActor->film->name, ['controller' => 'Films', 'action' => 'view', $filmsActor->film->id]) : '' ?></td>
                <td><?= $filmsActor->has('actor') ? $this->Html->link($filmsActor->actor->name, ['controller' => 'Actors', 'action' => 'view', $filmsActor->actor->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $filmsActor->film_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filmsActor->film_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filmsActor->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filmsActor->film_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
