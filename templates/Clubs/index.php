<div class="card">
    <div class="card-header">
        <h3>Tous les clubs</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <?=
                $this->Html->tableHeaders([
                    ['N°', ['class' => 'th-num']],
                    'Nom Club',
                    'Créée',
                    'Modifiée',
                    ['Action', ['class' => 'th-action']]])
                ?>
            </thead>
            <tbody>
                <?php
                foreach ($mesClubs as $club):
                    list($dateC, $heureC) = explode('-', h($club->created->format('d/m/Y-H:i:s')));
                    list($dateM, $heureM) = explode('-', h($club->modified->format('d/m/Y-H:i:s')));
                    ?>
                    <tr>
                        <td><?= h($club->id) ?></td>
                        <td><?=
                            $this->html->link(h($club->nom_club),
                                    ['controller' => 'clubs', 'action' => 'view', $club->id]);
                            ?></td>
                        <td><?= h("Le $dateC à $heureC") ?></td>
                        <td><?= h("Le $dateM à $heureM") ?></td>
                        <td><?=
                            $this->html->link(__($this->Icon->faIcon('fas fa-edit', 'Modifier')),
                                    ['action' => 'edit', $club->id],
                                    ['class' => 'button-custom', 'title' => 'Modifier', 'escape' => false])
                            ?> 
                            <?=
                            $this->Form->postLink(__($this->Icon->faIcon('fas fa-times-circle', 'Supprimer')),
                                    ['action' => 'delete', $club->id],
                                    ['class' => 'button-custom', 'title' => 'Supprimer', 'escape' => false,
                                        'confirm' => __("Vraiment supprimer {0} dont l'id vaut {1} ", $club->nom_club, $club->id)])
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
                    ['controller' => 'Clubs', 'action' => 'add'],
                    ['class' => 'btn btn-block btn-primary', 'escape' => false])
            ?>
        </div>
    </div>
</div>
<?php unset($mesClubs); ?>