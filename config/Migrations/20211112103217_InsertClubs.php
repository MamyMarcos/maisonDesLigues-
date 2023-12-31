<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class InsertClubs extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up() {
        $this->execute('INSERT INTO clubs(nom_club, created, modified) VALUES
                (\'Manchester United\', now(), now()),
                (\'Nets\', now(), now()),
                (\'Tennis Club\', now(), now()),
                (\'Liverpool\', now(), now())');
    }

    public function down() {
        $this->execute('DELETE FROM clubs');
    }

}
