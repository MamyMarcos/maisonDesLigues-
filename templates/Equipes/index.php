<div class="card">
    <div class="card-header">
        <h3>Tous les équipes</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <?=
                $this->Html->tableHeaders([
                    ['N°', ['class' => 'th-num']],
                    'Nom equipe',
                    'club',
                    'championnat',
                    'Créée',
                    'Modifiée',
                    ['Action', ['class' => 'th-action']]])
                ?>
            </thead>
            <tbody>
                <?php
                foreach ($mesEquipes as $equipe):
                    list($dateC, $heureC) = explode('-', h($equipe->created->format('d/m/Y-H:i:s')));
                    list($dateM, $heureM) = explode('-', h($equipe->modified->format('d/m/Y-H:i:s')));
                    ?>
                    <tr>
                        <td><?= h($equipe->id) ?></td>
                        <td><?=
                            $this->html->link(h($equipe->nom),
                                    ['controller' => 'equipes', 'action' => 'view', $equipe->id]);
                            ?></td>
                        <td><?= h($equipe->club->nom_club) ?></td>
                        <td><?= h($equipe->championnat->nom_championnat) ?></td>
                        <td><?= h("Le $dateC à $heureC") ?></td>
                        <td><?= h("Le $dateM à $heureM") ?></td>
                        <td><?=
                            $this->html->link(__($this->Icon->faIcon('fas fa-edit', 'Modifier')),
                                    ['action' => 'edit', $equipe->id],
                                    ['class' => 'button-custom', 'title' => 'Modifier', 'escape' => false])
                            ?> 
                            <?=
                            $this->Form->postLink(__($this->Icon->faIcon('fas fa-times-circle', 'Supprimer')),
                                    ['action' => 'delete', $equipe->id],
                                    ['class' => 'button-custom', 'title' => 'Supprimer', 'escape' => false,
                                        'confirm' => __("Vraiment supprimer {0} dont l'id vaut {1} ", $equipe->nom, $equipe->id)])
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
                    ['controller' => 'equipes', 'action' => 'add'],
                    ['class' => 'btn btn-block btn-primary', 'escape' => false])
            ?>
        </div>
    </div>
</div>
<?php unset($mesEquipes); ?>