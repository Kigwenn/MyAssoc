<section class="content-header">
    <h1>Connexion</h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Merci de rentrer vos nom d\'utilisateur et mot de passe') ?> </h3>
                    <!-- /.box-header -->
                </div>
                <!-- form start -->
                <?= $this->Form->create() ?>
                <div class="box-body">
                    <?= $this->Form->input('login'); ?>
                    <?= $this->Form->input('password'); ?>
                </div>
                <div class="box-footer">
                    <?= $this->Form->button(__('Connexion')) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>