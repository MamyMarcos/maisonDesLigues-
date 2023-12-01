<div class="card">
    <div class="card-header">
        <h3>Toutes les catégories</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <?=
                $this->Html->tableHeaders([
                    ['N°', ['class' => 'th-num']],
                    'Nom Catégorie',
                    'Montant indémnité',
                    'Créée',
                    'Modifiée',
                    ['Action', ['class' => 'th-action']]])
                ?>
            </thead>
            <tbody>
                <?php
                foreach ($mesCategories as $category):
                    list($dateC, $heureC) = explode('-', h($category->created->format('d/m/Y-H:i:s')));
                    list($dateM, $heureM) = explode('-', h($category->modified->format('d/m/Y-H:i:s')));
                    ?>
                    <tr>
                        <td><?= h($category->id) ?></td>
                        <td><?=
                            $this->html->link(h($category->nom_categorie),
                                    ['controller' => 'categories', 'action' => 'view', $category->id]);
                            ?></td>
                        <td><?= h($category->montant_indemnite) . ' &euro;' ?></td>
                        <td><?= h("Le $dateC à $heureC") ?></td>
                        <td><?= h("Le $dateM à $heureM") ?></td>
                        <td><?=
                            $this->html->link(__($this->Icon->faIcon('fas fa-edit', 'Modifier')),
                                    ['action' => 'edit', $category->id],
                                    ['class' => 'button-custom', 'title' => 'Modifier', 'escape' => false])
                            ?> 
                            <?=
                            $this->Form->postLink(__($this->Icon->faIcon('fas fa-times-circle', 'Supprimer')),
                                    ['action' => 'delete', $category->id],
                                    ['class' => 'button-custom', 'title' => 'Supprimer', 'escape' => false,
                                        'confirm' => __("Vraiment supprimer {0} dont l'id vaut {1} ", $category->nom_categorie, $category->id)])
                            ?> 

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="card-tools float-right">
            <?=
            $this->Html->link(__($this->Icon->faIcon('fas fa-plus-circle') . ' Ajouter'),
                    ['controller' => 'Categories', 'action' => 'add'],
                    ['class' => 'btn btn-block btn-primary', 'escape' => false])
            ?>
        </div>
    </div>
</div>
<?php unset($mesCategories); ?>