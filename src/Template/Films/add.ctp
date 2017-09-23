<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Films'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actors'), ['controller' => 'Actors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="films form large-9 medium-8 columns content">
    <?= $this->Form->create($film) ?>
    <fieldset>
        <legend><?= __('Add Film') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('content');
            echo $this->Form->control('actors._ids', ['options' => $actors]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
