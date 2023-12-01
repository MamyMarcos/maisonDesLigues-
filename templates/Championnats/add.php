<div class="container-md">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $this->Icon->faIcon('fas fa-plus-circle') ?> Ajouter un championnat</h3>
        </div>
        <?= $this->Form->create($leNewChampionnat) ?>
        <div class="card-body">
            <div class="form-group">
                <?= $this->Form->control('nom_championnat', ['label' => __('Nom du championnat'), 'class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('category_id', ['label' => __('Catégorie'), 'options' => $categories, 'class' => 'custom-select'])?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('division_id', ['label' => __('Division'), 'options' => $divisions, 'class' => 'custom-select']);?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('type_championnat_id', ['label' => __('Type de championnat'), 'options' => $types, 'class' => 'custom-select'])?>
            </div>
        </div>
        <div class="card-footer">
            <?= $this->Form->button(__("Sauvegarder le championnat"), ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link(__('Retour'),
                    ['controller' => 'Championnats', 'action' => 'index'],
                    ['class' => 'btn btn-default float-right'])?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>

<?php
unset($categories);
unset($divisions);
unset($types);
?>
