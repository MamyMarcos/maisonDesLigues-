<div class="container-md">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $this->Icon->faIcon('fas fa-plus-circle') ?> Ajouter une catégorie</h3>
        </div>
        <?= $this->Form->create($laNewCategory) ?>
        <div class="card-body">
            <div class="form-group">
                <?= $this->Form->control('nom_categorie', ['label' => __('Nom de la catégorie'), 'class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('montant_indemnite', ['label' => 'Montant de l\'indeminité', 'class' => 'form-control']) ?>
            </div>
        </div>
        <div class="card-footer">
            <?= $this->Form->button(__("Sauvegarder la catégorie"), ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link(__('Retour'),
                    ['controller' => 'Categories', 'action' => 'index'],
                    ['class' => 'btn btn-default float-right'])?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
