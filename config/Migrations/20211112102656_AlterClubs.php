<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterClubs extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {$clubs = $this->table('clubs');
        $clubs->create();
        $clubs->addColumn('nom_club', 'string')
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->save();
    }
}
