<?php
/**
 * @var \App\View\AppView $this
 */
?>

<section class="content-header">
    <h1>
        <?php echo __('Ajouter un favoris'); ?>
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
                    <h3 class="box-title"><?= __('Favori Ajout') ?></h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= $this->Form->create($favori) ?>
                    <?php
                    echo $this->Form->input('user_id',['label' =>'Nom de l\'utilisateur','options' => $users]);
                    echo $this->Form->input('film_id',['label' =>'Nom du film:','options' => $films]);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->button(__('Ajouter')) ?>
    <?= $this->Form->end() ?>
</section>