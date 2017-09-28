<?php
/**
 * @var \App\View\AppView $this
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
        <div class="col-md-12 ">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?= __('Film Modification') ?></h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= $this->Form->create($film) ?>
                    <?php
                    echo $this->Form->input('name',['label' =>'Titre du film']);
                    echo $this->Form->input('content',['label' =>'Description']);
                    echo $this->Form->input('actors_id', ['label' =>'Acteur principal','options' => $actors, 'empty' => true]);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end() ?>
</section>