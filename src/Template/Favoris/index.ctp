<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favori[]|\Cake\Collection\CollectionInterface $favoris
 */
?>

<?= $this->Html->css(['jquery.dataTables.min']) ?>
<?= $this->Html->script(['jquery.dataTables.min']) ?>

<section class="content-header">
    <h1>
        <?php echo __('Favoris'); ?>
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
                    <h3 class="box-title"><?= __('Favoris Liste') ?></h3>
                </div>

                <div class="favoris index columns content dataTables_wrapper">
                    <div class="dataTables_length" id="Films_length">
                        <label>Afficher
                            <select name="Favoris_length" aria-controls="Favoris" class="">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                            Favoris
                        </label>
                    </div>

                    <div id="Favoris_filter" class="dataTables_filter">
                        <label>Rechercher:
                            <input type="search" class="" placeholder="" aria-controls="Favoris">
                        </label>
                    </div>

                    <table id="" class="display dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="Favoris_info" style="width: 100%;">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="Favori" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Titre: activer pour trier la colonne en descendant" style="col-lg-6 col-md-5"><?= $this->Paginator->sort('id') ?></th>
                            <th class="sorting_asc" tabindex="0" aria-controls="Favori" rowspan="1" colspan="1" aria-sort="ascending" aria-label="créer: activer pour trier la colonne en descendant" style="col-lg-2 col-md-2"><?= $this->Paginator->sort('Utilisateur') ?></th>
                            <th class="sorting_asc" tabindex="0" aria-controls="Favori" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Modification: activer pour trier la colonne en descendant" style="col-md-5"><?= $this->Paginator->sort('film') ?></th>
                            <th style="col-md-2">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <?php foreach ($favoris as $favori): ?>
                            <td><?= h($favori->id) ?></td>
                            <td><?= h($favori->user->login) ?></td>
                            <td><?= h($favori->film->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Afficher '), ['action' => 'view', $favori->id], ['class'=>'btn btn-info btn-xs']) ?>
                                <?= $this->Html->link(__('Editer '), ['action' => 'edit', $favori->id], ['class'=>'btn btn-warning btn-xs']) ?>
                                <?= $this->Form->postLink(__('Effacer '), ['action' => 'delete', $favori->id], ['confirm' => __('êtes vous sur de vouloir supprimer # {0}?', $favori->id), 'class'=>'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <?= $this->Paginator->first('<< ' . __('au debut')) ?>
                            <?= $this->Paginator->prev('< ' . __('précédent')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('suivant') . ' >') ?>
                            <?= $this->Paginator->last(__('dernier') . ' >>') ?>
                        </ul>
                        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, {{current}} enregistrement(s) sur {{count}}')]) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#Films').DataTable();
        } );
    </script>