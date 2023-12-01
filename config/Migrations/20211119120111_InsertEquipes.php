<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class InsertEquipes extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up() {
        $this->execute('INSERT INTO equipes(nom, club_id, championnat_id, created, modified) VALUES
                (\'Equipe 1\', 1, 2, now(), now()),
                (\'Equipe 2\', 3, 2, now(), now()),
                (\'Equipe 3\',2, 3, now(), now()),
                (\'Equipe 4\',2, 1, now(), now())');
    }

    public function down() {
        $this->execute('DELETE FROM equipes');
    }

}