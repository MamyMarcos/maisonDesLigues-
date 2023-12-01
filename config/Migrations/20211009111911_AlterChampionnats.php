<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterChampionnats extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $championnats = $this->table('championnats');
        $championnats->create();
        $championnats->addColumn('nom_championnat', 'string')
                ->addColumn('category_id', 'integer')
                ->addColumn('division_id', 'integer')
                ->addColumn('type_championnat_id', 'integer')
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->addForeignKey('category_id', 'categories', 'id')
                ->addForeignKey('division_id', 'divisions', 'id')
                ->addForeignKey('type_championnat_id', 'type_championnats', 'id')
                ->save();
    }

}
