<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favori $favori
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Favori'), ['action' => 'edit', $favori->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Favori'), ['action' => 'delete', $favori->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favori->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Favoris'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Favori'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Films'), ['controller' => 'Films', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Films', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="favoris view large-9 medium-8 columns content">
    <h3><?= h($favori->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $favori->has('user') ? $this->Html->link($favori->user->id, ['controller' => 'Users', 'action' => 'view', $favori->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Film') ?></th>
            <td><?= $favori->has('film') ? $this->Html->link($favori->film->name, ['controller' => 'Films', 'action' => 'view', $favori->film->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($favori->id) ?></td>
        </tr>
    </table>
</div>