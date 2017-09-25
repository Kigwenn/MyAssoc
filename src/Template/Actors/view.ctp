<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Actor $actor
*/
?>

<section class="content-header">
<h1>
<?php echo __('Acteur'); ?>
</h1>
<ol class="breadcrumb">
<li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Retour'), ['action' => 'index'], ['escape' => false])?>
</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-md-8">
    <div class="box box-solid">
        <div class="box-header with-border">
            <i class="fa fa-info"></i>
            <h3 class="box-title"><?php echo __('Détail de l\'acteur'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <dl class="dl-horizontal">
                <dd><h3><strong><?= h($actor->name) ?></strong></h3></dd>
            </dl>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="row">
        <div class="col-md-2">
            <strong><?= __('Créer: ') ?></strong>
        </div>

        <div class="col-md-6">
            <?= h($actor->created) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <strong><?= __('Modifier: ') ?></strong>
        </div>

        <div class="col-md-6">
            <?= h($actor->modified) ?>
        </div>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="box box-solid">
    <div class="box-header with-border">
        <i class="fa fa-info"></i>
        <h3 class="box-title"><?php echo __('Film'); ?></h3>
    </div> <?php if (!empty($actor->films)): ?>
    <?php foreach ($actor->films as $films): ?>
    <div class="box-body">
        <dl class="dl-horizontal">
            <dd><h3><strong><?= h($films->name) ?></strong></h3></dd>
        </dl>
        <dl class="dl-horizontal">
            <dt><?= __('Déscription') ?></dt>
            <dd><?= h($films->content) ?></dd>
        </dl>
        <div class=" text-right">
        <?= $this->Html->link(__('View'), ['controller' => 'Films', 'action' => 'view', $films->id]) ?>
        <?= $this->Html->link(__('Edit'), ['controller' => 'Films', 'action' => 'edit', $films->id]) ?>
        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Films', 'action' => 'delete', $films->id], ['confirm' => __('Are you sure you want to delete # {0}?', $films->id)]) ?>
    </div>
    </div>
            <?php endforeach; ?>
            <?php endif; ?>
</div>
</div>
</div>
</section>>