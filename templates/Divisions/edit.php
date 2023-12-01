<div class="container-md">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $this->Icon->faIcon('fas fa-edit') ?> Modifier la division n&deg;<?= $laDivision->id ?></h3>
        </div>
        <?= $this->Form->create($laDivision) ?>
        <div class="card-body">
            <div class="form-group">
                <?= $this->Form->control('nom', ['label' => __('Nom de la division'), 'class' => 'form-control']) ?>
            </div>
        </div>
        <div class="card-footer">
            <?= $this->Form->button(__("Modifier la division"), ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link(__('Retour'),
                    ['controller' => 'Divisions', 'action' => 'index'],
                    ['class' => 'btn btn-default float-right'])?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
