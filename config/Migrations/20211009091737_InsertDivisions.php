<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class InsertDivisions extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up() {
        $this->execute('INSERT INTO divisions(nom, created, modified) VALUES
                (\'Premier\', now(), now()),
                (\'Seconde\', now(), now()),
                (\'Troisième\', now(), now()),
                (\'Quatrième\', now(), now())');
    }

    public function down() {
        $this->execute('DELETE FROM divisions');
    }

}
