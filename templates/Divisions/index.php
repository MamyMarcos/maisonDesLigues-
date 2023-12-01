<div class="card">
    <div class="card-header">
        <h3>Toutes les divisions</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <?=
                $this->Html->tableHeaders([
                    ['N°', ['class' => 'th-num']],
                    'Nom de la division',
                    'Créée',
                    'Modifiée',
                    ['Action', ['class' => 'th-action']]])
                ?>
            </thead>
            <tbody>
                <?php
                foreach ($mesDivisions as $division):
                    list($dateC, $heureC) = explode('-', h($division->created->format('d/m/Y-H:i:s')));
                    list($dateM, $heureM) = explode('-', h($division->modified->format('d/m/Y-H:i:s')));
                    ?>
                    <tr>
                        <td><?= h($division->id) ?></td>
                        <td><?= $this->html->link(h($division->nom), ['controller' => 'Divisions', 'action' => 'view', $division->id]); ?></td>
                        <td><?= h("Le $dateC à $heureC") ?></td>
                        <td><?= h("Le $dateM à $heureM") ?></td>
                        <td><?=
                            $this->html->link(__($this->Icon->faIcon('fas fa-edit', 'Modifier')),
                                    ['action' => 'edit', $division->id],
                                    ['class' => 'button-custom', 'title' => 'Modifier', 'escape' => false])
                            ?> 
                            <?=
                            $this->Form->postLink(__($this->Icon->faIcon('fas fa-times-circle', 'Supprimer')),
                                    ['action' => 'delete', $division->id],
                                    ['class' => 'button-custom', 'title' => 'Supprimer', 'escape' => false,
                                        'confirm' => __("Vraiment supprimer {0} dont l'id vaut {1} ", $division->nom, $division->id)])
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
                    ['controller' => 'Divisions', 'action' => 'add'],
                    ['class' => 'btn btn-block btn-primary', 'escape' => false])
            ?>
        </div>
    </div>
</div>
<?php unset($mesDivisions); ?>