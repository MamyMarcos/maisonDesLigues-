<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterCategories extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $categories = $this->table('categories');
        $categories->create();
        $categories->addColumn('nom_categorie', 'string')
                ->addColumn('montant_indemnite', 'decimal',['precision' => 10, 'scale' => 2])
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->save();
    }

}
