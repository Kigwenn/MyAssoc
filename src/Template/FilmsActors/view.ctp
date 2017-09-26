<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FilmsActor $filmsActor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Films Actor'), ['action' => 'edit', $filmsActor->film_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Films Actor'), ['action' => 'delete', $filmsActor->film_id], ['confirm' => __('Are you sure you want to delete # {0}?', $filmsActor->film_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Films Actors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Films Actor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Films'), ['controller' => 'Films', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Films', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actors'), ['controller' => 'Actors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="filmsActors view large-9 medium-8 columns content">
    <h3><?= h($filmsActor->film_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Film') ?></th>
            <td><?= $filmsActor->has('film') ? $this->Html->link($filmsActor->film->name, ['controller' => 'Films', 'action' => 'view', $filmsActor->film->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actor') ?></th>
            <td><?= $filmsActor->has('actor') ? $this->Html->link($filmsActor->actor->name, ['controller' => 'Actors', 'action' => 'view', $filmsActor->actor->id]) : '' ?></td>
        </tr>
    </table>
</div>
