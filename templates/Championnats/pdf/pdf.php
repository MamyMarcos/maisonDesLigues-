<div class="text-center">
    <<h1>Liste des championnats</h1>
</div>
<table class="table table-striped">
    <thead>
        <?=
        $this->Html->tableHeaders([
            ['N°', ['class' => 'th-num']],
            'Catégorie',
            'Division',
            'Créée',
            'Modifiée',
        ])
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
                <td><?= h($championnat->category->nom_categorie . ' | ' . $championnat->category->montant_indemnite) ?>&euro;</td>
                <td><?= h($championnat->division->nom) ?></td>
                <td><?= h("Le $dateC à $heureC") ?></td>
                <td><?= h("Le $dateM à $heureM") ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>