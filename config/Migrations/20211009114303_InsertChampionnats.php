<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class InsertChampionnats extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up() {
        $this->execute('INSERT INTO championnats(nom_championnat,category_id, division_id, type_championnat_id, created, modified) VALUES
                (\'Premier\', 1, 2, 3, now(), now()),
                (\'Seconde\', 3, 2, 1, now(), now()),
                (\'Troisième\',2, 3, 1, now(), now()),
                (\'Quatrième\',2, 1, 3, now(), now())');
    }

    public function down() {
        $this->execute('DELETE FROM championnats');
    }

}
