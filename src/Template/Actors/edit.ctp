<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Films'), ['controller' => 'Films', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Film'), ['controller' => 'Films', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actors form large-9 medium-8 columns content">
    <?= $this->Form->create($actor) ?>
    <fieldset>
        <legend><?= __('Edit Actor') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('films._ids', ['options' => $films]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
