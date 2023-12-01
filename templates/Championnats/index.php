<div class="card">
    <div class="card-header">
        <h3>Tous les championnats</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <?=
                $this->Html->tableHeaders([
                    ['N°', ['class' => 'th-num']],
                    'Nom du championnat',
                    'Catégorie',
                    'Division',
                    'Type',
                    'Créée',
                    'Modifiée',
                    ['Action', ['class' => 'th-action']]])
                ?>
            </thead>
            <tbody>
                <?php
                foreach ($mesChampionnats as $championnat):
                    list($dateC, $heureC) = explode('-', h($championnat->created->format('d/m/Y-H:i:s')));
                    list($dateM, $heureM) = explode('-', h($championnat->modified->format('d/m/Y-H:i:s')));
                    ?>
                    <tr>
                        <td><?= h($championnat->id) ?></td>
                        <td><?= $this->html->link(h($championnat->nom_championnat), ['controller' => 'Championnats', 'action' => 'view', $championnat->id]); ?></td>
                        <td><?= h($championnat->category->nom_categorie) ?></td>
                        <td><?= h($championnat->division->nom) ?></td>
                        <td><?= h($championnat->type_championnat->nom_type) ?></td>
                        <td><?= h("Le $dateC à $heureC") ?></td>
                        <td><?= h("Le $dateM à $heureM") ?></td>
                        <td><?=
                            $this->html->link(__($this->Icon->faIcon('fas fa-edit', 'Modifier')),
                                    ['action' => 'edit', $championnat->id],
                                    ['class' => 'button-custom', 'title' => 'Modifier', 'escape' => false])
                            ?> 
                            <?=
                            $this->Form->postLink(__($this->Icon->faIcon('fas fa-times-circle', 'Supprimer')),
                                    ['action' => 'delete', $championnat->id],
                                    ['class' => 'button-custom', 'title' => 'Supprimer', 'escape' => false,
                                        'confirm' => __("Vraiment supprimer {0} dont l'id vaut {1} ", $championnat->nom_championnat, $championnat->id)])
                            ?> 

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="float-left">
            <?=
            $this->Html->link(__($this->Icon->faIcon('fas fa-file-pdf') . ' Générer PDF'),
                    ['controller' => 'Championnats', 'action' => 'pdf'],
                    ['class' => 'btn btn-block btn-danger', 'escape' => false])
            ?>
        </div>
        <div class="float-right">
            <?=
            $this->Html->link(__($this->Icon->faIcon('fas fa-plus-circle') . ' Ajouter'),
                    ['controller' => 'Championnats', 'action' => 'add'],
                    ['class' => 'btn btn-block btn-primary float-right', 'target' => '__blank', 'escape' => false])
            ?>
        </div>
    </div>
</div>
<?php unset($mesChampionnats); ?>