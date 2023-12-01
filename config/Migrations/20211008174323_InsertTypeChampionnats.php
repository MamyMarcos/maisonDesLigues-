<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class InsertTypeChampionnats extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up(){
        $this->execute('INSERT INTO type_championnats(nom_type, created, modified) VALUES
                (\'Premier\',now(), now()),
                (\'Deuxième\',now(), now()),
                (\'Troisième\',now(), now()),
                (\'Quatrième\',now(), now())');
    }
    
    public function down(){
        $this->execute('DELETE FROM type_championnats');
    }

}
