<div class="row">
    <div class="col-lg-3 col-6">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0">Championnats</h5>
            </div>
            <div class="card-body h-100">
                <table class="table table-striped">
                    <thead>
                        <?=
                        $this->Html->tableHeaders([
                            ['N°', ['class' => 'th-num']],
                            'Nom du championnat'])
                        ?>
                    </thead>
                    <tbody>
                        <?php foreach ($championnats as $id => $nom): ?>
                            <tr>
                                <td><?= h($id) ?></td>
                                <td><?= h($nom) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?=
                $this->Html->link(__($this->Icon->faIcon('fas fa-plus-circle') . ' Ajouter'),
                        ['controller' => 'Championnats', 'action' => 'add'],
                        ['class' => 'btn btn-block btn-primary', 'escape' => false])
                ?>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0">Types</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <?=
                        $this->Html->tableHeaders([
                            ['N°', ['class' => 'th-num']],
                            'Type'])
                        ?>
                    </thead>
                    <tbody>
                        <?php foreach ($types as $id => $nom): ?>
                            <tr>
                                <td><?= h($id) ?></td>
                                <td><?= h($nom) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?=
                $this->Html->link(__($this->Icon->faIcon('fas fa-plus-circle') . ' Ajouter'),
                        ['controller' => 'TypeChampionnats', 'action' => 'add'],
                        ['class' => 'btn btn-block btn-primary', 'escape' => false])
                ?>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0">Catégories</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <?=
                        $this->Html->tableHeaders([
                            ['N°', ['class' => 'th-num']],
                            'Catégorie'])
                        ?>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $id => $nom): ?>
                            <tr>
                                <td><?= h($id) ?></td>
                                <td><?= h($nom) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?=
                $this->Html->link(__($this->Icon->faIcon('fas fa-plus-circle') . ' Ajouter'),
                        ['controller' => 'Categories', 'action' => 'add'],
                        ['class' => 'btn btn-block btn-primary', 'escape' => false])
                ?>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0">Divisions</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <?=
                        $this->Html->tableHeaders([
                            ['N°', ['class' => 'th-num']],
                            'Division'])
                        ?>
                    </thead>
                    <tbody>
                        <?php foreach ($divisions as $id => $nom): ?>
                            <tr>
                                <td><?= h($id) ?></td>
                                <td><?= h($nom) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?=
                $this->Html->link(__($this->Icon->faIcon('fas fa-plus-circle') . ' Ajouter'),
                        ['controller' => 'Divisions', 'action' => 'add'],
                        ['class' => 'btn btn-block btn-primary', 'escape' => false])
                ?>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
<?php
$this->assign('title', 'Maison des Ligues');
unset($championnats);
unset($divisions);
unset($types);
unset($categories);
?>