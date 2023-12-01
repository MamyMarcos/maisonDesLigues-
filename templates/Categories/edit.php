<div class="container-md">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $this->Icon->faIcon('fas fa-edit') ?> Modifier la catégorie n&deg;<?= $laCategorie->id ?></h3>
        </div>
        <?= $this->Form->create($laCategorie) ?>
        <div class="card-body">
            <div class="form-group">
                <?= $this->Form->control('nom_categorie', ['label' => __('Nom de la catégorie'), 'class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('montant_indemnite', ['label' => 'Montant de l\'indeminité', 'class' => 'form-control']) ?>
            </div>
        </div>
        <div class="card-footer">
            <?= $this->Form->button(__("Modifier la catégorie"), ['class' => 'btn btn-primary']); ?>
            <?= $this->Html->link(__('Retour'),
                    ['controller' => 'Categories', 'action' => 'index'],
                    ['class' => 'btn btn-default float-right'])?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>

