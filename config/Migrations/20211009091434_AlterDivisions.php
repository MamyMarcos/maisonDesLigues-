<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterDivisions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $divisions = $this->table('divisions');
        $divisions->create();
        $divisions->addColumn('nom', 'string')
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->save();
    }
}
