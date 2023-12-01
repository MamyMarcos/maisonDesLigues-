<div class="container-md">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $this->Icon->faIcon('fas fa-plus-circle') ?> Ajouter une équipe</h3>
        </div>
        <?= $this->Form->create($leNewEquipe) ?>
        <div class="card-body">
            <div class="form-group">
                <?= $this->Form->control('nom', ['label' => __('Nom du championnat'), 'class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('club_id', ['label' => __('Catégorie'), 'options' => $clubs, 'class' => 'custom-select'])?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('championnat_id', ['label' => __('Championnat'), 'options' => $championnats, 'class' => 'custom-select']);?>
            </div>
            
        </div>
        <div class="card-footer">
            <?= $this->Form->button(__("Sauvegarder le championnat"), ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link(__('Retour'),
                    ['controller' => 'Equipes', 'action' => 'index'],
                    ['class' => 'btn btn-default float-right'])?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>

<?php
unset($clubs);
unset($championnats);
?>
