<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Films Actors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Films'), ['controller' => 'Films', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Films', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actors'), ['controller' => 'Actors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actor'), ['controller' => 'Actors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="filmsActors form large-9 medium-8 columns content">
    <?= $this->Form->create($filmsActor) ?>
    <fieldset>
        <legend><?= __('Add Films Actor') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
