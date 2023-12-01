<div class="card">
    <div class="card-header">
        <h3>Toutes les types de championnats</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <?=
                $this->Html->tableHeaders([
                    ['N°', ['class' => 'th-num']],
                    'Nom du type',
                    'Créée',
                    'Modifiée',
                    ['Action', ['class' => 'th-action']]])
                ?>
            </thead>
            <tbody>

                <?php
                foreach ($mesTypeChampionnats as $type):
                    list($dateC, $heureC) = explode('-', h($type->created->format('d/m/Y-H:i:s')));
                    list($dateM, $heureM) = explode('-', h($type->modified->format('d/m/Y-H:i:s')));
                    ?>
                    <tr>
                        <td><?= h($type->id) ?></td>
                        <td><?= $this->html->link(h($type->nom_type), ['controller' => 'TypeChampionnats', 'action' => 'view', $type->id]); ?></td>
                        <td><?= h("Le $dateC à $heureC") ?></td>
                        <td><?= h("Le $dateM à $heureM") ?></td>
                        <td><?=
                            $this->html->link(__($this->Icon->faIcon('fas fa-edit', 'Modifier')),
                                    ['action' => 'edit', $type->id],
                                    ['class' => 'button-custom', 'title' => 'Modifier', 'escape' => false])
                            ?> 
                            <?=
                            $this->Form->postLink(__($this->Icon->faIcon('fas fa-times-circle', 'Supprimer')),
                                    ['action' => 'delete', $type->id],
                                    ['class' => 'button-custom', 'title' => 'Supprimer', 'escape' => false,
                                        'confirm' => __("Vraiment supprimer {0} dont l'id vaut {1} ", $type->nom, $type->id)])
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
                    ['controller' => 'TypeChampionnats', 'action' => 'add'],
                    ['class' => 'btn btn-block btn-primary', 'escape' => false])
            ?>
        </div>
    </div>
</div>
<?php unset($mesTypeChampionnats); ?>