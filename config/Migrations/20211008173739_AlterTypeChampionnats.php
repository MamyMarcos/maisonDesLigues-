<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterTypeChampionnats extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $typeChampionnats = $this->table('type_championnats');
        $typeChampionnats->create();
        $typeChampionnats->addColumn('nom_type','string')
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->save();
    }

}
