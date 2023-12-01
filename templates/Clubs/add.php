<div class="container-md">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $this->Icon->faIcon('fas fa-plus-circle') ?> Ajouter un club</h3>
        </div>
        <?= $this->Form->create($leNewClub) ?>
        <div class="card-body">
            <div class="form-group">
                <?= $this->Form->control('nom_club', ['label' => __('Nom du club'), 'class' => 'form-control']) ?>
            </div>
        </div>
        <div class="card-footer">
            <?= $this->Form->button(__("Sauvegarder le club"), ['class' => 'btn btn-primary']); ?>
            <?=
            $this->Html->link(__('Retour'),
                    ['controller' => 'Clubs', 'action' => 'index'],
                    ['class' => 'btn btn-default float-right'])
            ?>
        </div>
<?= $this->Form->end() ?>
    </div>
</div>
