<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film $film
 */
?>

<section class="content-header">
    <h1>
        <?php echo __('Film'); ?>
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
                    <h3 class="box-title"><?php echo __('Détail'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dd><h3><strong><?= h($film->name) ?></strong></h3></dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><?= __('Déscription') ?></dt>
                        <dd><?= h($film->content) ?></dd>
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
                    <?= h($film->created) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <strong><?= __('Modifier: ') ?></strong>
                </div>

                <div class="col-md-6">
                    <?= h($film->modified) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4><?= __('Acteur principal:') ?></h4>
                </div>
                <div class="col-md-4">
                    <?php if (!empty($film->actors)): ?>
                        <?php foreach ($film->actors as $actors): ?>
                            <h4><strong><?= h($actors->name) ?></strong></h4>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>>
