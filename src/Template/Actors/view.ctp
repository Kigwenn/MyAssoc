<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actor'), ['action' => 'edit', $actor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actor'), ['action' => 'delete', $actor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Films'), ['controller' => 'Films', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Films', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actors view large-9 medium-8 columns content">
    <h3><?= h($actor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($actor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($actor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($actor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($actor->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Films') ?></h4>
        <?php if (!empty($actor->films)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actor->films as $films): ?>
            <tr>
                <td><?= h($films->id) ?></td>
                <td><?= h($films->name) ?></td>
                <td><?= h($films->content) ?></td>
                <td><?= h($films->created) ?></td>
                <td><?= h($films->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Films', 'action' => 'view', $films->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Films', 'action' => 'edit', $films->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Films', 'action' => 'delete', $films->id], ['confirm' => __('Are you sure you want to delete # {0}?', $films->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
