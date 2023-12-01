<div class="container-md">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $this->Icon->faIcon('fas fa-info-circle') ?> Catégorie n°<?= h($category->id) ?></h3>
        </div>
        <div class="card-body">
            <dl>
                <dt class="border-bottom">Nom:</dt>
                <dd class="view-margin"><?= h($category->nom_categorie) ?></dd>
                <dt class="border-bottom">Montant indemnité:</dt>
                <dd class="view-margin"><?= h($category->montant_indemnite) ?>&euro;</dd>
                <dt class="border-bottom">Date de création:</dt>
                <dd class="view-margin"><?= h($category->created->format('d/m/Y H:i:s')) ?></dd>
                <dt class="border-bottom">Derniere modification:</dt>
                <dd class="view-margin"><?= h($category->modified->format('d/m/Y H:i:s')) ?></dd>
            </dl>
        </div>
        <div class="card-footer">
            <?=
            $this->Html->link(__('Retour'),
                    ['controller' => 'Categories', 'action' => 'index'],
                    ['class' => 'btn btn-default float-right'])
            ?>
        </div>
    </div>
</div>