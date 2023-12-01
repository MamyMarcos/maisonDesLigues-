<div class="container-md">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $this->Icon->faIcon('fas fa-edit') ?> Modifier le type n&deg;<?= $leType->id?></h3>
        </div>
        <?= $this->Form->create($leType) ?>
        <div class="card-body">
            <div class="form-group">
                <?= $this->Form->control('nom_type', ['label' => __('Nom du type de championnat'), 'class' => 'form-control']) ?>
            </div>
        </div>
        <div class="card-footer">
            <?= $this->Form->button(__("Modifier le type"), ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link(__('Retour'),
                    ['controller' => 'TypeChampionnats', 'action' => 'index'],
                    ['class' => 'btn btn-default float-right'])?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>